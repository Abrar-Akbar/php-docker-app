<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e2f;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: auto;
            padding: 2rem;
        }
        h1, h2 {
            text-align: center;
            color: #4caf50;
        }
        h1 {
            font-size: 2.5rem;
        }
        h2 {
            color: #00acc1;
            font-size: 1.8rem;
            margin-top: 2rem;
        }
        .section {
            background-color: #27293d;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1rem 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .section h3 {
            color: #4caf50;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }
        .section p {
            color: #b0bec5;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            padding: 0.5rem;
            display: flex;
            justify-content: space-between;
            background-color: #2e2e3f;
            border-radius: 5px;
            margin: 0.3rem 0;
        }
        .status {
            font-weight: bold;
            color: #4caf50;
        }
        .button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            color: #ffffff;
            background-color: #4caf50;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            text-align: center;
            margin: 1rem auto;
            display: block;
            width: 150px;
        }
        .button:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DevOps Dashboard</h1>
        <p style="text-align: center;">Your one-stop solution to monitor, deploy, and manage your DevOps pipelines and tools.</p>

        <h2>CI/CD Pipelines</h2>
        <div class="section">
            <h3>Continuous Integration and Deployment</h3>
            <ul>
                <li>
                    <span>GitHub Actions</span>
                    <span class="status">Active</span>
                </li>
                <li>
                    <span>Jenkins</span>
                    <span class="status">Running</span>
                </li>
                <li>
                    <span>CircleCI</span>
                    <span class="status">Idle</span>
                </li>
            </ul>
        </div>

        <h2>Monitoring Tools</h2>
        <div class="section">
            <h3>System Monitoring</h3>
            <ul>
                <li>
                    <span>Prometheus</span>
                    <span class="status">Collecting Data</span>
                </li>
                <li>
                    <span>Grafana</span>
                    <span class="status">Dashboard Live</span>
                </li>
                <li>
                    <span>New Relic</span>
                    <span class="status">Inactive</span>
                </li>
            </ul>
        </div>

        <h2>Containerization</h2>
        <div class="section">
            <h3>Containers & Orchestration</h3>
            <ul>
                <li>
                    <span>Docker</span>
                    <span class="status">Running</span>
                </li>
                <li>
                    <span>Kubernetes</span>
                    <span class="status">Scaling</span>
                </li>
                <li>
                    <span>Helm</span>
                    <span class="status">Stable</span>
                </li>
            </ul>
        </div>

        <h2>Infrastructure as Code</h2>
        <div class="section">
            <h3>IAC Tools</h3>
            <ul>
                <li>
                    <span>Terraform</span>
                    <span class="status">Deployed</span>
                </li>
                <li>
                    <span>CloudFormation</span>
                    <span class="status">Provisioned</span>
                </li>
                <li>
                    <span>Ansible</span>
                    <span class="status">Running</span>
                </li>
            </ul>
        </div>

        <a href="#" class="button">Get Started</a>
    </div>
</body>
</html>
