<?php

use yii\helpers\Html;

$this->title = 'TEST';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-test">
    <h1><?= Html::encode($this->title) ?></h1>
    <div>
        <p id="dynamic-text">Original Text</p>
        <button hx-get="/site/update-text" hx-target="#dynamic-text">Update Text</button>
        <div _="on click call alert('You clicked me!')">
            Click Me!
        </div>
        <div x-data="{
            search: '',
    
            items: ['foo', 'bar', 'baz'],
    
            get filteredItems() {
                return this.items.filter(
                    i => i.startsWith(this.search)
                )
            }
        }">
            <input x-model="search" placeholder="Search...">

            <ul>
                <template x-for="item in filteredItems" :key="item">
                    <li x-text="item"></li>
                </template>
            </ul>
        </div>
        <div x-data="dropdown">
            <button @click="toggle">...</button>

            <div x-show="open">...</div>
        </div>

        <button x-data @click="$store.darkMode.toggle()">Toggle Dark Mode</button>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('darkMode', {
                    on: false,

                    toggle() {
                        console.log(this.on);
                        this.on = !this.on
                    }
                })
            })
        </script>
    </div>
</div>