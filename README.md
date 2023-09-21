# new-repo-docekrized
# Install docker 
    * If you have already installed then skip this step.
        Docker Installation:
            `https://docs.docker.com/engine/install/`
# Installation Setup
This steps requires to install project on your local machine.
    * Clone project from git repository `git clone <repo_url>`.
    * Open terminam and open hosts file:
        Ubuntu: 
            1. sudo nano /var/etc/hosts.
            2. Add this->   `127.0.0.1 <site_name>`.
            3. Make sure any server running in your sytem should be stop e.g: `sudo systemctl stop apache2`
    * Open project in your Terminal (Go to that directory where docker-compose.ymal file exists).
    * Now run `docker ps` this command will show running containers if any other containers are running , STOP them `docker stop <container_id>`.
    * Run this command `docker-compose up -d`.
    * After Started containers successfully Open any browser And access site with this:
        `<site_name>:8085` Here we will add site `container's PORT` next to site_name.
    * Congratulations Site is RUNNING.

# START NEW TASK
This steps you doing when starting a new task.
    * Pull latest code `git pull origin <development_branch>`.
    * Complete your task.
    * After your task is finished.
        * If you did work and did any change on configurations level then follow these steps:
            1. import latest 
            1. Open terminal inside docekr's container with this command:
                `docker ps`                                         It will list all running containers.
                `docker-compose exec -it <container_id> /bin/bash`  It will oepn terminal in specified container.
            2. Verify `ls` you are in correct directory where your project files existing
            3. RUN `docker cr`     for chache rebuild
            4. RUN `docker cst`    for check status of your configurations.
            5. RUN `docker cex`    for export configurations.
        * Add modified files to git and commit.
            1. `git status`.
            2. `git add .`.
            3. `git commit -m "Add your commit message"`.
            4. `git push origin <development_branch>`.



## Author
Copyrights &copy; [adminusername](https://www.example.com/). All rights reserved 
