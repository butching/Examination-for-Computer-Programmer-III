import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';
@Component({
  selector: 'app-show-api',
  templateUrl: './show-api.component.html',
  styleUrls: ['./show-api.component.css']
})
export class ShowApiComponent implements OnInit {
 
  regions:any;
  constructor(private http : HttpClient){
     
}
 
  ngOnInit(): void {
    this.http.get('https://ncddpdb.dswd.gov.ph/api/ceac/lib_region')
    .subscribe(Response => {
 
      // If response comes hideloader() function is called
      // to hide that loader
      if(Response){ 
        hideloader();
      }
      console.log(Response)
      
      this.regions=Response;
    });
    function hideloader(){
      document.getElementById('loading').style.display = 'none';}
  }}
