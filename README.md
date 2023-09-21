# new-repo-dockerized

## Install Docker
* If you have already installed Docker, then skip this step.

    **Docker Installation:**
    ```bash
    https://docs.docker.com/engine/install/
    ```

## Installation Setup
These steps require you to install the project on your local machine.

1. Clone the project from the git repository:
    ```bash
    git clone https://github.com/ameer107/new-repo-docekrized.git
    ```

2. Open your terminal and edit the hosts file:

   - For Ubuntu:
     1. Open the hosts file:
        ```bash
        sudo nano /var/etc/hosts
        ```
     2. Add the following line:
        ```bash
        127.0.0.1 renewal-app-new.local
        ```
     3. Make sure any server running on your system is stopped. For example:
        ```bash
        sudo systemctl stop apache2
        ```

3. Open the project in your terminal (Navigate to the directory where the docker-compose.yaml file exists).

4. Run the following command to check for running containers. If any other containers are running, stop them:

    ```bash
    docker ps
    docker stop <container_id>
    ```

5. Run this command to start the containers in the background:

    ```bash
    docker-compose up -d
    ```

6. After the containers have started successfully, open any browser and access the site at:

    ```
    renewal-app-new.local:8085
    ```

    Here, we add the container's PORT next to the renewal-app-new.local.

7. Congratulations! The site is now RUNNING.

## START NEW TASK
Follow these steps when starting a new task.

1. Pull the latest code from the development branch:

    ```bash
    git pull origin <development_branch>
    ```

2. Complete your task.

3. After finishing your task, follow these steps if you made any changes at the configuration level:

   1. Import the latest.

   2. Open a terminal inside Docker's container with the following command:

      ```bash
      docker ps             # List all running containers.
      docker-compose exec -it <container_id> /bin/bash  # Open a terminal in the specified container.
      ```

   3. Verify that you are in the correct directory where your project files exist using:

      ```bash
      ls
      ```

   4. Run the following commands:

      ```bash
      docker cr     # For cache rebuild.
      docker cst    # To check the status of your configurations.
      docker cex    # To export configurations.
      ```

4. Add the modified files to Git and commit:

   1. Check the status of your changes:

      ```bash
      git status
      ```

   2. Add the changes to your commit:

      ```bash
      git add .
      ```

   3. Commit your changes with a meaningful message:

      ```bash
      git commit -m "Add your commit message"
      ```

   4. Push your changes to the development branch:

      ```bash
      git push origin <development_branch>
      ```

## Author
Copyrights &copy; [ameer107](https://www.example.com/). All rights reserved.
