# SWE40006 Deployment Activity 3 - Azure

Student: Zhi Ying Chan (106214056)
Unit: SWE40006 Software Deployment and Evolution
Level attempted: Task 3.3 (High Distinction)

## Public URLs

| Sub-task | App | URL | Status |
|---|---|---|---|
| 3.1 | Portfolio3 (default ASP.NET Core Razor Pages template) | https://portfolio3-zhiying-hyhch0bha2gta6hm.westus3-01.azurewebsites.net | Running |
| 3.2 | Task3App (my own C# app) | https://task3app-zhiying-hcb5gkbxdfcfdedf.westus3-01.azurewebsites.net | Deactivated (stopped) |
| 3.3 | Task33App (PHP) | https://task33app-zhiying-cpbjdjfqcabcbcfw.westus3-01.azurewebsites.net | Running |

## Files in this folder

### Task 3.2 - Task3App (ASP.NET Core Razor Pages, .NET 10)
Only the files I changed from the default template are included.

- `Pages/Index.cshtml` - home page with my name and the server time (`DateTime.Now`).
- `Pages/About.cshtml` - new About page.
- `Pages/Shared/_Layout.cshtml` - layout with an About link added to the navigation menu.

Deployed with Visual Studio (Publish > Azure > Azure App Service (Windows), Free plan).

### Task 3.3 - PHP app
- `index.php` - shows my name, the PHP version and the server time, and has a form that reads the name with `$_POST` and cleans it with `htmlspecialchars()`.

Developed in VS Code with PHP 8.5 and deployed with the Azure App Service extension to a Linux App Service.
