# Project 4: PHP App with MySQL, Multi-Stage Pipeline & Manual Promotion

## 🎯 Goal
Deploy a **PHP CRUD application** with a MySQL database. The deployment is managed using a **Jenkins pipeline** that promotes from **staging** to **production** manually.

---

## 🛠️ Requirements

- **Jenkins Master:** CentOS  
- **Application Servers:** Ubuntu  
- **Jenkins Agent:** Handles deployment  

### Ansible Roles
- Install **Apache + PHP**  
- Configure **MySQL** (users, schema, test data)  
- Deploy **PHP CRUD application**  

### Artifact Management
- Store builds in **Nexus** or **AWS S3**  
- Deploy selected version based on **Jenkins parameter**  

---

## 🔄 Pipeline Workflow

1. **Build** → Package the PHP app  
2. **Test** → Run basic checks  
3. **Archive** → Store build artifacts  
4. **Deploy to Staging**  
5. **Manual Promotion** → Deploy to Production after approval  
6. **Access App** → Application runs on port **80**, publicly accessible  

---

## 🌐 Expected Output

When deployed successfully, visiting the application in a browser should display:


---

## 👨‍💻 Project Contributors

| Name             | Email                     |
|------------------|---------------------------|
| Falade Kehinde   | dafaladexy@gmail.com      |
| Oyedeji Oyeku    | janedoe@example.com       |
| Samuel Fregene   | johnsmith@example.com     |


---

## 🖼️ CI/CD Pipeline Overview

```text
          +---------+        +------------+        +------------+
          |  Build  | -----> |   Test     | -----> |  Archive   |
          +---------+        +------------+        +------------+
                                                   |
                                                   v
                                            +---------------+
                                            |   Staging     |
                                            +---------------+
                                                   |
                                (Manual Approval)  |
                                                   v
                                            +---------------+
                                            |  Production   |
                                            +---------------+

