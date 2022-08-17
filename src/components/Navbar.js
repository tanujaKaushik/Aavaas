import React from 'react'

export default function Navbar(){
    return(
        <>
            <nav className="px-4 py-3 bg-blue-900 text-white">
                <ul className='flex'>
                    <li className='mx-4 cursor-pointer'>Home</li>
                    <li className='mx-4 cursor-pointer'>About Us</li>
                    <li className='mx-4 cursor-pointer'>Contact</li>
                    <li className='ml-96'><input className="placeholder:italic ml-20 float-right placeholder:text-slate-400 block bg-white text-black w-full border border-slate-300 rounded-md py-1 pl-5 pr-3 ml-20 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder=" Search" type="text" name="search"/></li> 
                </ul>
            </nav>
                <h3 className='text-center my-6 text-xl font-semibold'> 5463 Choices Available </h3>
        </>
    )
}