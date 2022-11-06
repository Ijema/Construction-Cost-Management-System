import React from 'react';
import { SocialIcon } from "react-social-icons";
import { motion } from "framer-motion";
import "../App.js"
// import { social } from "../typings";

export default function Header() {
  return (
    <header className="top-0 p-5 flex items-start justify-between max-w-7xl mx-auto z-20 xl:items-center">
        <motion.div 
            initial={{
                x: -500,
                opacity: 0,
                scale: 0.5
            }}
            animate={{
                x: 0,
                opacity:1,
                scale: 1           
            }}
            transition={{
                duration:1.5
            }}
            className="flex flex-row items-center">
                
                {/* <SocialIcon 
                    url="https://YouTube.com/jaketrent"  
                    fgColor="gray" 
                    bgColor="transparent"
                /> */}
                {/* <SocialIcon 
                    url="https://youtube.com/jaketrent"  
                    fgColor="gray" 
                    bgColor="transparent"
                /> */}
                <SocialIcon 
                    url="https://linkedin.com/in/ijeoma-amara-ojukwu"  
                    fgColor="white" 
                    bgColor="transparent"
                />
                <SocialIcon 
                    url="https://twitter.com/Ijeoma_Oj1?t=rgtSDAOLI3Hkpkm_3mql6g&s=09"  
                    fgColor="white" 
                    bgColor="transparent"
                />
                <div className="h-4 w-7 mt-[-20px]">
                <a href="https://docs.google.com/document/d/1_pQ-S0Qedr67CwIu86JPIao43AOiGF-3/edit?usp=sharing&ouid=116482452621473010180&rtpof=true&sd=true" >
                    <img src="../assets/cv-icon.jpg" alt="Cv/Resume Icon" />
                </a>
            </div>
        </motion.div>
    
    <a href="#contact">
        <motion.div 
            initial={{
                x: 500,
                opacity:0,
                scale: 0.5
            }}
            animate={{
                x: 0,
                opacity: 1,
                scale: 1
            }}
            transition={{
                duartion: 1.5
            }}
            className="flex flex-row items-center text-blue-300 cursor-pointer"
            >
            
            <SocialIcon 
                    className="cursor-pointer"
                    network="email"  
                    fgColor="white" 
                    bgColor="transparent"
                />
                <p className="uppercase hidden md:inline-flex text-sm text-stone-300 pl-2 pr-5">Get in Touch</p>
        </motion.div>
    </a>
    </header>
  );
}

