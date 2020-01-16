# Project Layout
Project is designed with MVC Architecture.
- Why to avoid fat controllers. Moving code to other layers
![Service Layer](https://martinfowler.com/eaaCatalog/ServiceLayerSketch.gif)
- Repositoris:
A repository is a class that, by talking directly to your models, processes and gather the information your application needs

# Directory
Directory structre follows Standard Laravel Project Layout.  


```
├── app -
│   ├── Models - Domain layer
│   ├── Services - 
│   ├── Repositories - 
│   └── Libaries - Libaries 
├── database - Database.
├── routes - Routes.
├── configs - Configuration files.
└── test - Testing files. 
```
