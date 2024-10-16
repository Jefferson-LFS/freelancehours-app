@props(['status'])
<span
    {{ $attributes->class([
        'rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide',
        'bg-[#C0F7B4] text-[#1d8338]' => $status === 'open',
        'bg-[#FECDD3] text-[#881337]' => $status === 'closed',
    ]) }}>
    {{ getProjectStatus($status) }}
</span>

