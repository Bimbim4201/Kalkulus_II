document.addEventListener('DOMContentLoaded', function() {
  // Initialize variables
  let chart;
  const ctx = document.getElementById('quadraticGraph').getContext('2d');

  // Setup Chart.js
  function setupChart() {
      chart = new Chart(ctx, {
          type: 'line',
          data: {
              datasets: [{
                  label: 'Quadratic Function',
                  borderColor: '#3498db',
                  backgroundColor: 'rgba(52, 152, 219, 0.1)',
                  borderWidth: 2,
                  pointRadius: 0,
                  fill: true
              }]
          },
          options: {
              responsive: true,
              scales: {
                  x: {
                      type: 'linear',
                      position: 'center',
                      title: {
                          display: true,
                          text: 'x'
                      }
                  },
                  y: {
                      type: 'linear',
                      position: 'center',
                      title: {
                          display: true,
                          text: 'y'
                      }
                  }
              }
          }
      });
  }

  // Update chart data
  function updateChart(a, b, c) {
      const xValues = [];
      const yValues = [];
      for (let x = -10; x <= 10; x += 0.1) {
          xValues.push(x);
          yValues.push(a * x * x + b * x + c);
      }
      chart.data.labels = xValues;
      chart.data.datasets[0].data = yValues;
      chart.update();
  }

  // Calculate quadratic function properties
  function calculateProperties(a, b, c) {
      const discriminant = b * b - 4 * a * c;
      const vertex = {
          x: -b / (2 * a),
          y: c - b * b / (4 * a)
      };
      let roots = [];
      if (discriminant > 0) {
          roots = [
              (-b + Math.sqrt(discriminant)) / (2 * a),
              (-b - Math.sqrt(discriminant)) / (2 * a)
          ];
      } else if (discriminant === 0) {
          roots = [-b / (2 * a)];
      }
      return {
          discriminant,
          vertex,
          roots,
          yIntercept: c
      };
  }

  // Update properties display
  function updateProperties(a, b, c) {
      const props = calculateProperties(a, b, c);
      let html = `
          <p>Vertex: (${props.vertex.x.toFixed(2)}, ${props.vertex.y.toFixed(2)})</p>
          <p>Y-intercept: ${props.yIntercept}</p>
          <p>Discriminant: ${props.discriminant.toFixed(2)}</p>
          <p>Roots: ${props.roots.length ? props.roots.map(r => r.toFixed(2)).join(', ') : 'None'}</p>
          <p>Opens: ${a > 0 ? 'Upward' : 'Downward'}</p>
      `;
      document.getElementById('properties').innerHTML = html;
  }

  // Setup input listeners
  function setupInputs() {
      ['a', 'b', 'c'].forEach(param => {
          const input = document.getElementById(param);
          const value = document.getElementById(`${param}-value`);
          input.addEventListener('input', function() {
              value.textContent = this.value;
              updateAll();
          });
      });
  }

  // Update everything
  function updateAll() {
      const a = parseFloat(document.getElementById('a').value);
      const b = parseFloat(document.getElementById('b').value);
      const c = parseFloat(document.getElementById('c').value);
      updateChart(a, b, c);
      updateProperties(a, b, c);
  }

  // Generate example problems
  function generateExamples() {
      const examples = [
          {
              question: "Find the roots of x² - 5x + 6 = 0",
              solution: "Using the quadratic formula, the roots are 2 and 3."
          },
          {
              question: "What is the vertex of y = 2x² - 4x - 2?",
              solution: "The vertex is at (1, -4)."
          },
          {
              question: "Determine the nature of the roots for x² + x + 1 = 0",
              solution: "The discriminant is negative, so the roots are complex."
          }
      ];

      const container = document.querySelector('.example-cards');
      examples.forEach(ex => {
          const card = document.createElement('div');
          card.className = 'theory-card';
          card.innerHTML = `
              <h3>${ex.question}</h3>
              <p><strong>Solution:</strong> ${ex.solution}</p>
          `;
          container.appendChild(card);
      });
  }

  // Initialize everything
  setupChart();
  setupInputs();
  updateAll();
  generateExamples();
});