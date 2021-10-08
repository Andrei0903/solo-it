import { Component, OnInit } from '@angular/core';
import { Hero } from 'src/app/hero';
import { HEROES } from "../../mock-heroes";

@Component({
  selector: 'app-heroes',
  templateUrl: './heroes.component.html',
  styleUrls: ['./heroes.component.sass']
})
export class HeroesComponent implements OnInit {

  selectedHero?: Hero;

  public heroes = HEROES;

  public OnSelect(hero: Hero): void{
    this.selectedHero = hero;
  }
  constructor() { }

  ngOnInit(): void {
  }

}
