<form wire:submit.prevent="save">
    <input type="file" id="file" ref="file" wire:model="photo">

    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Photo</button>

    <script>
        Vapor.store(this.$refs.file.files[0], {
            progress: progress => {
                this.uploadProgress = Math.round(progress * 100);
            }
        }).then(response => {
            axios.post('/api/profile-photo', {
                uuid: response.uuid,
                key: response.key,
                bucket: response.bucket,
                name: this.$refs.file.files[0].name,
                content_type: this.$refs.file.files[0].type,
            })
        });
    </script>
</form>
