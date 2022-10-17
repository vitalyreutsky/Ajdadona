const workSection = document.querySelector(".count-results");

if (workSection) {
  const countValueOne =
    +document.querySelector("[data-count-one]").dataset.countOne;

  const countValueSecond = +document.querySelector("[data-count-second]")
    .dataset.countSecond;

  const countValueThird =
    +document.querySelector("[data-count-third]").dataset.countThird;

  const objs = [
    {
      countItem: document.querySelector(".count-results--one"),
      countValue: countValueOne,
      arrCount: [
        "00" + 234,
        "00" + 890,
        "00" + 379,
        "0" + 1360,
        "0" + 3825,
        "0" + 6379,
        13460,
        15578,
        16560,
        19978,
        countValueOne,
      ],
    },
    {
      countItem: document.querySelector(".count-results--second"),
      countValue: countValueSecond,
      arrCount: [
        "00" + 534,
        "00" + 890,
        "0" + 1379,
        "0" + 5360,
        "0" + 9825,
        11379,
        15460,
        20578,
        31560,
        35978,
        countValueSecond,
      ],
    },
    {
      countItem: document.querySelector(".count-results--third"),
      countValue: countValueThird,
      arrCount: [
        "00" + 534,
        "0" + 1890,
        "0" + 9379,
        15360,
        20169,
        29825,
        31379,
        45460,
        50578,
        61560,
        countValueThird,
      ],
    },
  ];

  function printNumbers() {
    i = 0;
    setTimeout(function run() {
      if (
        i < objs[0].arrCount.length ||
        i < objs[1].arrCount.length ||
        i < objs[2].arrCount.length
      ) {
        go(i);
        i++;
        setTimeout(run, 50);
      }
    }, 50);
  }

  function go(i) {
    objs.forEach(({ countItem, countValue, arrCount }) => {
      if (arrCount[i] <= countValue) {
        countItem.innerHTML = arrCount[i];
      }
    });
  }

  const workObserver = new IntersectionObserver(
    (entries, observer) => {
      const [entry] = entries;

      if (!entry.isIntersecting) return;

      printNumbers();

      observer.unobserve(workSection);
    },

    {
      root: null,
      threshold: 0,
    }
  );

  workObserver.observe(workSection);
}
