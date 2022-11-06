import React, { useEffect, useState } from 'react'
//import sanityClient from '../client.js'
import { motion } from 'framer-motion'
// import { Skill } from '../../typings';
//import { groq } from 'next-sanity';
//import skill from 'typings.d.ts';

function Skill1() {

  return (
    <div className="group relative flex cursor-pointer top-20">
        <motion.img 
        initial={{
            x: 200,
            opacity:0,
        }}
        transition={{ duration: 1 }}
        whileInView={{ opacity: 1, x: 0 }}
        // "./assets/tailwind-logo.png"
        src="./assets/tailwind-logo.png" alt="Skills have"
        className="rounded-full border border-gray-500 object-cover w-20 h-20 xl:w-28
        xl:h-28 filter group-hover:grayscale transition duration-300 ease-in-out"
        />
        <div className="absolute opacity-0 group-hover:opacity-80 transition-300
        ease-in-ease-out group-hover:bg-white w-20 h-20 xl:w-28 xl:h-28
        rounded-full z-0">
            <div className="flex items-center justify-center h-full">
                <p className="text-2xl xl:text-3xl font-bold text-black opacity-100">100%</p>
            </div>
        </div>
    </div>
  )
}


export default Skill1