<?php

namespace Rappasoft\LaravelLivewireTables\Traits\Configuration;

trait PaginationConfiguration
{
    /**
     * @param  string  $theme
     *
     * @return $this
     */
    public function setPaginationTheme(string $theme): self
    {
        $this->paginationTheme = $theme;

        return $this;
    }

    /**
     * @param  bool  $status
     *
     * @return $this
     */
    public function setPaginationStatus(bool $status): self
    {
        $this->paginationStatus = $status;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPaginationEnabled(): self
    {
        $this->setPaginationStatus(true);

        return $this;
    }

    /**
     * @return $this
     */
    public function setPaginationDisabled(): self
    {
        $this->setPaginationStatus(false);

        return $this;
    }

    /**
     * @param  bool  $status
     *
     * @return $this
     */
    public function setPaginationVisibilityStatus(bool $status): self
    {
        $this->paginationVisibilityStatus = $status;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPaginationVisibilityEnabled(): self
    {
        $this->setPaginationVisibilityStatus(true);

        return $this;
    }

    /**
     * @return $this
     */
    public function setPaginationVisibilityDisabled(): self
    {
        $this->setPaginationVisibilityStatus(false);

        return $this;
    }

    /**
     * @param  bool  $status
     *
     * @return $this
     */
    public function setPerPageVisibilityStatus(bool $status): self
    {
        $this->perPageVisibilityStatus = $status;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPerPageVisibilityEnabled(): self
    {
        $this->setPerPageVisibilityStatus(true);

        return $this;
    }

    /**
     * @return $this
     */
    public function setPerPageVisibilityDisabled(): self
    {
        $this->setPerPageVisibilityStatus(false);

        return $this;
    }
}
