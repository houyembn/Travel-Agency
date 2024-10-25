<?php
session_start();
require_once('../controllers/CompteController.php');
require_once('../models/Connection.php');



if(isset($_POST["send"])){

    $Email_connec=$_POST['Email_connec'];
    $passe_connec=$_POST['passe_connec'];
    $compteCtr=new CompteController();
    $compte = new Connection();
    
if (isset($_POST['Email_connec']) && isset($_POST['passe_connec'])) {
   
    $res=$compteCtr->validate($compte);
   if (empty($Email_connec)) {
      header("Location: inscit.php?error=Email Addresse est obligatoire");
      exit();
   }else if(empty($passe_connec)){
      header("Location: inscit.php?error=Mot de passe est obligatoire");
      exit();
   }else{

    $res;
    $res=$compteCtr->getconnexion($Email_connec,$passe_connec);
    echo($res);

    if($res== true){
       setcookie("username", $Email_connec,time()+3600);
       setcookie("password", $passe_connec,time()+3600);
       header("location:clients.php"); 
    }
    else if( $Email_connec=="admin@gmail.com" && $passe_connec=="admin"){
        header("location:admin1.php");
    }
    else{
        header("Location: inscit.php?error=Email Addresse ou Mot de passe incorrect");
            exit();     
    }  
}
}
}



 
else{
    header("Location: inscit.php");
    exit();
}













<button type="button" (click)="toggleCard1()" class="btn btn-sm btn-success mt-4 mb-5">
<i class="fas fa-plus"></i>Afficher Card 1
</button>
<div *ngIf="showCard1" class="cadre1">
<div class="mini-cadre1">
 <div *ngFor="let project of projectListArray().controls; let i = index" class=" border border-dark my-2 p-5">
   <div [formGroupName]="i" class="input-box">
   <input type="text" placeholder="Nom du sous-thème" formControlName="Titre" />
   <button *ngIf="projectListArray().length > 1" class="btn btn-sm btn-danger ms-1" (click)="removeProject(i)"><i class="fas fa-trash"></i></button>
   </div>
   <div [formGroupName]="i" class="input-box">
     <input type="text" placeholder="Description" formControlName="Titre" />
     </div>

     <div [formGroup]="infoFormGroup(i)">
      <div formArrayName="projectInfoArray">
        <div *ngFor="let projectInfo of infoArray(i).controls; let j = index;" class="info-container">
          <div [formGroupName]="j" class="input-box">
            <input type="text" placeholder="Titre de Paragraphe" formControlName="Titre_de_Paragraphe" />
          </div>
          <div [formGroupName]="j" class="input-box">
            <input type="text" placeholder="Paragraphe" formControlName="Paragraphe" />
            <button type="button" class="btn btn-sm btn-success ms-1" (click)="addNewInfo(i)">
              <i class="fas fa-plus"></i>
            </button>
            <button class="btn btn-sm btn-danger ms-1" *ngIf="infoArray(i).length > 1" (click)="removeNewInfo(i, j)">
              <i class="fas fa-trash"></i>
            </button>
            <button type="button" (click)="addProject(1)" class="btn btn-sm btn-success mt-2">
              <i class="fas fa-plus"></i>Ajouter sous-thème Card 1
            </button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" (click)="toggleCard2()" class="btn btn-sm btn-primary mt-2">
      <i class="fas fa-plus"></i>Afficher Card 2
    </button>
    <div *ngIf="showCard2" class="card2">
      <div *ngFor="let project of projectListArray().controls; let i = index" class=" border border-dark my-2 p-5">
        <div [formGroupName]="i" class="input-box">
        <input type="text" placeholder="Nom du sous-thème" formControlName="Titre" />
        <button *ngIf="projectListArray().length > 1" class="btn btn-sm btn-danger ms-1" (click)="removeProject(i)"><i class="fas fa-trash"></i></button>
        </div>
        <div [formGroupName]="i" class="input-box">
          <input type="text" placeholder="Description" formControlName="Titre" />
          </div>

          <div [formGroup]="infoFormGroup(i)">
           <div formArrayName="projectInfoArray">
             <div *ngFor="let projectInfo of infoArray(i).controls; let j = index;" class="info-container">
               <div [formGroupName]="j" class="input-box">
                 <input type="text" placeholder="Titre de Paragraphe" formControlName="Titre_de_Paragraphe" />
               </div>
               <div [formGroupName]="j" class="input-box">
                 <input type="text" placeholder="Paragraphe" formControlName="Paragraphe" />
                 <button type="button" class="btn btn-sm btn-success ms-1" (click)="addNewInfo(i)">
                   <i class="fas fa-plus"></i>
                 </button>
                 <button class="btn btn-sm btn-danger ms-1">
                   <i class="fas fa-trash"></i>
                 </button>
               </div>
             </div>
           </div>
         </div>
         </div>
         <button type="button" (click)="addProject(2)" class="btn btn-sm btn-success mt-2">
          <i class="fas fa-plus"></i>Ajouter sous-thème Card 2
        </button>
    </div>

 </div>
</div>
</div>



?>



<div class="sidebar" [class.sidebar-close]="!openSidebar">
          <ul class="nav-links list-unstyled components" id="nav-links">
            <li *ngFor="let item of menuSidebar" #itemEl routerLinkActive="active">
              <div *ngIf="item.link">
                <a [routerLink]="[item.link]">
                  {{item.link_name}}
                </a>
              </div>

              <div *ngIf="!item.link" class="dropdown-title" (click)="showSubmenu(itemEl)">
                <a data-toggle="collapse" class="dropdown-toggle">
                {{item.link_name}}
                </a>
              </div>

              
              <ul class="nav-links list-unstyled components">
                <li *ngFor="let item of menuSidebar ; let i = index" [routerLinkActive]="['active']" class="nav-item">
                  <div class="dropdown-title">
                    <a data-toggle="collapse" class="dropdown-toggle nav-link" [routerLink]="[item.link]">{{ item.link_name }}</a>
                  </div>
                  <ul class="sub-menu">
                    <ng-container *ngIf="item.sub_menu && item.sub_menu.length > 0">
                      <app-menu-item [menuItems]="item.sub_menu"></app-menu-item>
                    </ng-container>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>


        <ul class="sub-menu nav-links list components" *ngIf="menuItems && menuItems.length > 0">
    <li *ngFor="let item of menuItems">
      <div class="dropdown-title" [ngClass]="{'active': item.showSubMenu}">
        <a (click)="toggleSubMenu(item)" class="dropdown nav-link">{{ item.link_name }}</a>
        <span class="dropdown-arrow" (click)="toggleSubMenu(item)">
          <i class="fa fa-caret-down"></i>
        </span>
      </div>
    
      <app-menu-item *ngIf="item.showSubMenu" [menuItems]="item.sub_menu"></app-menu-item>
    </li>
  </ul>