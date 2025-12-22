<div class="flex-1">
    <div class="flex flex-col md:flex-row h-full">
    <div class="flex-1 pr-0 md:pr-12 lg:pr-24">
            <h3 class="text-white font-semibold text-xl tracking-wide mb-12">
                Intended for use by developers to test their endpoint <br>
                implementations before integration.
            </h3>

            <div class="space-y-4 pb-16">
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <label class="w-full sm:w-32 text-white font-bold pr-0 sm:pr-4 mb-0 sm:mb-0">Host URL</label>
                    <div x-data="{ url: '{{ $url }}' }" class="inline-block relative w-full sm:max-w-sm">
                        <input x-bind:class="{ 'bg-gray-100 text-blue-800 opacity-100': url !== '' }" x-model="url" class="form-input sim-input pl-5 pr-12 bg-white" wire:model.defer="url" type="url" name="url" placeholder="eg. https://a924d784.ngrok.io" autocomplete="off" />
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <div wire:model="url">
                                <svg x-on:click="url = ''" x-show="url !== ''" class="w-6 h-6 text-blue-700 mr-5 cursor-pointer" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <label class="w-full sm:w-32 text-white font-bold pr-0 sm:pr-4 mb-0 sm:mb-0">Method</label>
                    <div x-data="{ method: '{{ $method }}', hide: true }" class="inline-block relative w-full sm:max-w-sm z-30">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <svg x-show="method === 'get'" class="w-6 h-6 ml-5" viewBox="0 0 15.154 11.996"><g id="Get" transform="translate(-276 -340.683)"><path id="Path_118" data-name="Path 118" d="M-964.929,1105.092l3.86-2.687a.311.311,0,0,1,.488.255v1.819h4.805a.868.868,0,0,1,.868.868.867.867,0,0,1-.868.868h-4.805v1.819a.311.311,0,0,1-.488.255l-3.86-2.687A.31.31,0,0,1-964.929,1105.092Z" transform="translate(1241.062 -761.666)" fill="#1d3f4d"/><path id="Path_119" data-name="Path 119" d="M-964.929,1105.092l3.86-2.687a.311.311,0,0,1,.488.255v1.819h4.805a.868.868,0,0,1,.868.868.867.867,0,0,1-.868.868h-4.805v1.819a.311.311,0,0,1-.488.255l-3.86-2.687A.31.31,0,0,1-964.929,1105.092Z" transform="translate(1246.062 -755.666)" fill="#1d3f4d" opacity="0.4"/></g></svg>
                            <svg x-show="method === 'post'" class="w-6 h-6 ml-5" viewBox="0 0 15.154 11.996"><path id="Path_118" data-name="Path 118" d="M-955.041,1105.092l-3.86-2.687a.311.311,0,0,0-.488.255v1.819h-4.805a.868.868,0,0,0-.868.868.867.867,0,0,0,.868.868h4.805v1.819a.311.311,0,0,0,.488.255l3.86-2.687A.31.31,0,0,0-955.041,1105.092Z" transform="translate(970.062 -1102.349)" fill="#22a586"/><path id="Path_119" data-name="Path 119" d="M-955.041,1105.092l-3.86-2.687a.311.311,0,0,0-.488.255v1.819h-4.805a.868.868,0,0,0-.868.868.867.867,0,0,0,.868.868h4.805v1.819a.311.311,0,0,0,.488.255l3.86-2.687A.31.31,0,0,0-955.041,1105.092Z" transform="translate(965.062 -1096.349)" fill="#22a586" opacity="0.4"/></svg>
                        </div>
                        <input x-bind:class="{ 'pl-5': method === '', 'pl-16 bg-gray-100 text-blue-800 opacity-100': method !== '' }" x-model="method" x-on:click="hide = false" class="form-input sim-select pr-12 cursor-pointer bg-white" wire:model.defer="method" type="text" name="method" placeholder="Select request method" autocomplete="off" readonly />
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <svg class="w-6 h-6 text-ash-dark mr-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div x-bind:class="{ 'hidden': hide === true }" x-on:click.away="hide = true" class="absolute bg-gray-100 inset-x-0 rounded-b">
                            <div wire:model="method">
                                <div x-on:click="method = 'get';$dispatch('input', 'get');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <svg class="w-6 h-6" viewBox="0 0 15.154 11.996"><g id="Get" transform="translate(-276 -340.683)"><path id="Path_118" data-name="Path 118" d="M-964.929,1105.092l3.86-2.687a.311.311,0,0,1,.488.255v1.819h4.805a.868.868,0,0,1,.868.868.867.867,0,0,1-.868.868h-4.805v1.819a.311.311,0,0,1-.488.255l-3.86-2.687A.31.31,0,0,1-964.929,1105.092Z" transform="translate(1241.062 -761.666)" fill="#1d3f4d"/><path id="Path_119" data-name="Path 119" d="M-964.929,1105.092l3.86-2.687a.311.311,0,0,1,.488.255v1.819h4.805a.868.868,0,0,1,.868.868.867.867,0,0,1-.868.868h-4.805v1.819a.311.311,0,0,1-.488.255l-3.86-2.687A.31.31,0,0,1-964.929,1105.092Z" transform="translate(1246.062 -755.666)" fill="#1d3f4d" opacity="0.4"/></g></svg>
                                    <span class="ml-4 text-blue-800">get</span>
                                </div>
                            </div>
                            <div wire:model="method">
                                <div x-on:click="method = 'post';$dispatch('input', 'post');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <svg class="w-6 h-6" viewBox="0 0 15.154 11.996"><path id="Path_118" data-name="Path 118" d="M-955.041,1105.092l-3.86-2.687a.311.311,0,0,0-.488.255v1.819h-4.805a.868.868,0,0,0-.868.868.867.867,0,0,0,.868.868h4.805v1.819a.311.311,0,0,0,.488.255l3.86-2.687A.31.31,0,0,0-955.041,1105.092Z" transform="translate(970.062 -1102.349)" fill="#22a586"/><path id="Path_119" data-name="Path 119" d="M-955.041,1105.092l-3.86-2.687a.311.311,0,0,0-.488.255v1.819h-4.805a.868.868,0,0,0-.868.868.867.867,0,0,0,.868.868h4.805v1.819a.311.311,0,0,0,.488.255l3.86-2.687A.31.31,0,0,0-955.041,1105.092Z" transform="translate(965.062 -1096.349)" fill="#22a586" opacity="0.4"/></svg>
                                    <span class="ml-4 text-blue-800">post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <label class="w-full sm:w-32 text-white font-bold pr-0 sm:pr-4 mb-0 sm:mb-0">Network</label>
                    <div x-data="{ network: '{{ $network }}', hide: true }" class="inline-block relative w-full sm:max-w-sm z-20">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <img x-show="network === 'at'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/airteltigo.png') : asset('img/airteltigo.png') }}" />
                            <img x-show="network === 'glo'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/glo.png') : asset('img/glo.png') }}" />
                            <img x-show="network === 'mtn'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/mtn.png') : asset('img/mtn.png') }}" />
                            <img x-show="network === 'telecel'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/telecel.png') : asset('img/telecel.png') }}" />
                        </div>
                        <input x-bind:class="{ 'pl-5': network === '', 'pl-16 bg-gray-100 text-blue-800 opacity-100': network !== '' }" x-model="network" x-on:click="hide = false" class="form-input sim-select pr-12 cursor-pointer bg-white" wire:model.defer="network" type="text" name="network" placeholder="Select network operator" autocomplete="off" readonly />
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <svg class="w-6 h-6 text-ash-dark mr-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div x-bind:class="{ 'hidden': hide === true }" x-on:click.away="hide = true" class="absolute bg-gray-100 inset-x-0 rounded-b">
                            <div wire:model="network">
                                <div x-on:click="network = 'at';$dispatch('input', 'at');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/airteltigo.png') : asset('img/airteltigo.png') }}" />
                                    <span class="ml-4 text-blue-800">at</span>
                                </div>
                            </div>
                            <div wire:model="network">
                                <div x-on:click="network = 'glo';$dispatch('input', 'glo');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/glo.png') : asset('img/glo.png') }}" />
                                    <span class="ml-4 text-blue-800">glo</span>
                                </div>
                            </div>
                            <div wire:model="network">
                                <div x-on:click="network = 'mtn';$dispatch('input', 'mtn');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/mtn.png') : asset('img/mtn.png') }}" />
                                    <span class="ml-4 text-blue-800">mtn</span>
                                </div>
                            </div>
                            <div wire:model="network">
                                <div x-on:click="network = 'telecel';$dispatch('input', 'telecel');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/telecel.png') : asset('img/telecel.png') }}" />
                                    <span class="ml-4 text-blue-800">telecel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <label class="w-full sm:w-32 text-white font-bold pr-0 sm:pr-4 mb-0 sm:mb-0">Phone Number</label>
                    <div x-data="{ phoneNumber: '{{ $phoneNumber }}' }" class="inline-block relative w-full sm:max-w-sm">
                        <input x-bind:class="{ 'bg-gray-100 text-blue-800 opacity-100': phoneNumber !== '' }" x-model="phoneNumber" class="form-input sim-input pl-5 pr-12 bg-white" wire:model.defer="phoneNumber" type="tel" name="phone_number" placeholder="eg. 0546628393" autocomplete="off" />
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <div wire:model="phoneNumber">
                                <svg x-on:click="phoneNumber = ''" x-show="phoneNumber !== ''" class="w-6 h-6 text-blue-700 mr-5 cursor-pointer" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <label class="w-full sm:w-32 text-white font-bold pr-0 sm:pr-4 mb-0 sm:mb-0">Aggregator</label>
                    <div x-data="{ aggregator: '{{ $aggregator }}', hide: true }" class="inline-block relative w-full sm:max-w-sm z-10">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <img x-show="aggregator === 'korba'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/korba.png') : asset('img/korba.png') }}" />
                            <img x-show="aggregator === 'nsano'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/nsano.png') : asset('img/nsano.png') }}" />
                            <img x-show="aggregator === 'nalo'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/nalo.png') : asset('img/nalo.png') }}" />
                            <img x-show="aggregator === 'arkesel'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/nalo.png') : asset('img/arkesel.png') }}" />
                            <img x-show="aggregator === 'africastalking'" class="inline-block w-6 h-6 ml-5" src="{{ config('app.env') === 'production' ? secure_asset('img/africastalking.png') : asset('img/africastalking.png') }}" />
                        </div>
                        <input x-bind:class="{ 'pl-5': aggregator === '', 'pl-16 bg-gray-100 text-blue-800 opacity-100': aggregator !== '' }" x-model="aggregator" x-on:click="hide = false" class="form-input sim-select pr-12 cursor-pointer bg-white" wire:model.defer="aggregator" type="text" name="aggregator" placeholder="Select aggregator" autocomplete="off" readonly />
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <svg class="w-6 h-6 text-ash-dark mr-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div x-bind:class="{ 'hidden': hide === true }" x-on:click.away="hide = true" class="absolute bg-gray-100 inset-x-0 rounded-b">
                            <div wire:model="aggregator">
                                <div x-on:click="aggregator = 'korba';$dispatch('input', 'korba');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/korba.png') : asset('img/korba.png') }}" />
                                    <span class="ml-4 text-blue-800">korba</span>
                                </div>
                            </div>
                            <div wire:model="aggregator">
                                <div x-on:click="aggregator = 'nsano';$dispatch('input', 'nsano');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/nsano.png') : asset('img/nsano.png') }}" />
                                    <span class="ml-4 text-blue-800">nsano</span>
                                </div>
                            </div>
                            <div wire:model="aggregator">
                                <div x-on:click="aggregator = 'nalo';$dispatch('input', 'nalo');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/nalo.png') : asset('img/nalo.png') }}" />
                                    <span class="ml-4 text-blue-800">nalo</span>
                                </div>
                            </div>
                            <div wire:model="aggregator">
                                <div x-on:click="aggregator = 'arkesel';$dispatch('input', 'arkesel');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/arkesel.png') : asset('img/arkesel.png') }}" />
                                    <span class="ml-4 text-blue-800">arkesel</span>
                                </div>
                            </div>
                            <div wire:model="aggregator">
                                <div x-on:click="aggregator = 'africastalking';$dispatch('input', 'africastalking');hide = true" class="flex px-5 py-3 cursor-pointer">
                                    <img class="inline-block w-6 h-6" src="{{ config('app.env') === 'production' ? secure_asset('img/africastalking.png') : asset('img/africastalking.png') }}" />
                                    <span class="ml-4 text-blue-800">africastalking</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-72 flex-none mt-6 md:mt-0 md:ml-4 lg:ml-8">
            <div class="bg-white w-full sm:w-72 sm:h-135 rounded-2xl px-3 pt-3 pb-8 shadow-xl">
                <div class="bg-ash-light h-full rounded-xl">
                    <div class="flex flex-col h-full space-y-2 p-2">
                        <pre class="flex-1 overflow-y-auto overflow-x-hidden"><code class="text-xs text-gray-700 leading-tight tracking-tight whitespace-pre-wrap break-words" wire:loading.remove wire:target="sendRequest">{{ $output }}</code><p wire:loading wire:target="sendRequest">Loading...</p></pre>
                        <div class="flex-none">
                            <div class="flex flex-col space-y-1">
                                <h4 class="text-black font-bold text-sm">Enter USSD Code</h4>
                                <div x-data="{ input: '' }" x-on:ussd-input-cleared.window="input = ''" class="inline-block relative">
                                    <input x-bind:class="{ 'bg-gray-100 text-blue-800': input !== '', 'bg-ash text-ash-darker': input === '' }" x-model="input" class="px-5 py-3 form-input rounded-md focus:bg-ash w-full" placeholder="eg.*721#" wire:model="input" type="text" name="input" />
                                    <div class="absolute inset-y-0 right-0 flex items-center">
                                        <div wire:model="input">
                                            <svg x-on:click="input = '';$dispatch('input', '')" x-show="input !== ''" class="w-6 h-6 text-blue-700 mr-5 cursor-pointer" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <button class="py-3 px-5 bg-purple-800 hover:bg-purple-600 focus:outline-none focus:shadow-outline rounded-md shadow-lg" type="button" wire:click="sendRequest">
                                    <span class="flex items-center justify-center space-x-2">
                                        <svg class="w-6 h-6 fill-current text-white" viewBox='0 0 512 512'><path d='M476.59,227.05l-.16-.07L49.35,49.84A23.56,23.56,0,0,0,27.14,52,24.65,24.65,0,0,0,16,72.59V185.88a24,24,0,0,0,19.52,23.57l232.93,43.07a4,4,0,0,1,0,7.86L35.53,303.45A24,24,0,0,0,16,327V440.31A23.57,23.57,0,0,0,26.59,460a23.94,23.94,0,0,0,13.22,4,24.55,24.55,0,0,0,9.52-1.93L476.4,285.94l.19-.09a32,32,0,0,0,0-58.8Z'/></svg>
                                        <span class="font-bold text-white">
                                            Send
                                        </span>
                                    </span>
                                </button>
                                <button class="text-blue-700 hover:text-blue-600 py-3 px-5 focus:outline-none focus:shadow-outline rounded-md" type="button" wire:click="cancelRequest">
                                    <span class="flex items-center justify-center space-x-2">
                                        <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                        <span class="font-bold">
                                            Reset
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>