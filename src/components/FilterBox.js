import React from 'react'

export default function FilterBox(){
    return(
        <div>
            <p className='text-center font-serif text-lg font-bold mb-2'>Filters</p>
            <div className='font-serif my-2'>
                <p className='mx-5 mb-1'>Category</p>
                    <div className="dropdown">
                    <button className="btn btn-light bg-white dropdown-toggle mx-4 w-60" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Select Category </span>
                    </button>
                    <ul className="dropdown-menu">
                    <li><button className="dropdown-item" type="button">Flats</button></li>
                    <li><button className="dropdown-item" type="button">Paying Guest</button></li>
                    <li><button className="dropdown-item" type="button">Hostels</button></li>
                    </ul>
                </div>
            </div>
            <div className='font-serif my-4'>
                <p className='mx-5 '>Location</p>
                <input className="mx-4 w-60 placeholder:text-black block bg-white border border-slate-300 rounded-md py-2 pl-14 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="e.g. Delhi" type="text" name="search"/>
            </div>
            <ul>
               <li><input type="checkbox" className="ml-12 mr-4 checked" />
                Fully Furnished</li>
                <li><input type="checkbox" className=" ml-12 mr-4 mt-2 checked"/>
                With meal</li>
                <li><input type="checkbox" className=" ml-12 mr-4 mt-2 checked"/>
                Sharing</li>
            </ul>
            <input type="range" min="0" max="12100" value="0" step="1" className="slider mx-8 mt-3 "  />        
        </div>
    )
}