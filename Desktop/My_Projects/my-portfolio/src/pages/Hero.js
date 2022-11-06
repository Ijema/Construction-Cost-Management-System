import React from 'react'
import { Cursor, useTypewriter } from 'react-simple-typewriter'
import BackgroundCircles from '../pages/BackgroundCircles'



function Hero() {
const [text] = useTypewriter({
             words: [
            'Hi, The name is Ijeoma Ojukwu',
            'Very dedicated and hardworking',
            'Above her limit she strives to get',
            'This is just the beginning',
            'Her best is yet to come'
        ],    
        loop: true,
        delaySpeed: 2000,
    })

  return (
     <div className="h-screen flex flex-col space-y-0 items-center text-center pt-[7px] overflow-hidden">
        <BackgroundCircles />
        <img
            className="relative top-7 rounded-full h-[163px] w-[163px] mx-auto object-cover "
            src ="./assets/passport1.jpg" alt="My Profile Display" 
        />
        <div className="z-20">
            <h2 className="text-sm md:text-md pt-[49px] uppercase text-gray-100 tracking-[9px] pb-2 pl-2">
                Front-end Developer
            </h2>
            <h1 className="text-lg md:text-2xl font-semibold px-10 overflow-hidden">
                <span className="mr-3">{text}</span>
                <Cursor cursorColor="#ffffff" />
            </h1>
            <div className="pt-2 space-x-1">
                    <a href="#about">
                        <button className="heroButton">About</button>
                    </a>
                    <a href="#workExperience">
                        <button className="heroButton">Experience</button>
                    </a>
                    <a href="#skills">
                        <button className="heroButton">Skills</button>
                    </a>
                    <a href="#projects">
                        <button className="heroButton">Projects</button>
                    </a>
            </div>
        </div>
    </div>
  );
}

export default Hero