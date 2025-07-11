
<x-layout>
        
            
            <div class="min-h-[calc(100vh-4rem)] flex flex-col md:grid md:grid-cols-2">
                <div class="flex flex-col justify-center p-6 md:p-12 order-1 md:order-none">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Rastrear usando código de rastreamento
                            </h2>
                            <form action="#" method="GET" class="flex items-center space-x-2">
                                <div class="relative w-full max-w-md">
                                    <input type="text" name="codigo_rastreio" placeholder="Código de rastreamento" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-indigo-500 rounded-r-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">Consultar</button>
                                </div>
                            </form>
                            </div>
    
                        <div class="space-y-4">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Histórico de encomendas do Cliente
                            </h2>
                            <form action="#" method="GET">
                                <div class="relative w-full max-w-md">
                                    <input type="tel" name="telefone" placeholder="Número de telefone" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" oninput="aplicarMascaraTelefone(this)" maxlength="15">
                                    <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-indigo-500 rounded-r-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">Consultar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
                <div class="flex items-center justify-center bg-gray-100 order-2 md:order-none">
                    <img src="/entrega.webp" alt="Placeholder" class="object-cover w-full h-full">
                </div>
            </div>
</x-layout>
       