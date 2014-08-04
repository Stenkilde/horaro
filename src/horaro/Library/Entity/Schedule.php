<?php
/*
 * Copyright (c) 2014, Sgt. Kabukiman, https://bitbucket.org/sgt-kabukiman/
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

namespace horaro\Library\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Schedule
 */
class Schedule {
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $slug;

	/**
	 * @var string
	 */
	private $timezone;

	/**
	 * @var \DateTime
	 */
	private $updated_at;

	/**
	 * @var \DateTime
	 */
	private $start;

	/**
	 * @var \Doctrine\Common\Collections\Collection
	 */
	private $items;

	/**
	 * @var \Doctrine\Common\Collections\Collection
	 */
	private $columns;

	/**
	 * @var \horaro\Library\Entity\Event
	 */
	private $event;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->items   = new ArrayCollection();
		$this->columns = new ArrayCollection();
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Schedule
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set slug
	 *
	 * @param string $slug
	 * @return Schedule
	 */
	public function setSlug($slug) {
		$this->slug = $slug;

		return $this;
	}

	/**
	 * Get slug
	 *
	 * @return string
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * Set timezone
	 *
	 * @param string $timezone
	 * @return Schedule
	 */
	public function setTimezone($timezone) {
		$this->timezone = $timezone;

		return $this;
	}

	/**
	 * Get timezone
	 *
	 * @return string
	 */
	public function getTimezone() {
		return $this->timezone;
	}

	/**
	 * Set updated_at
	 *
	 * @param \DateTime $updatedAt
	 * @return Schedule
	 */
	public function setUpdatedAt($updatedAt) {
		$this->updated_at = $updatedAt;

		return $this;
	}

	/**
	 * Get updated_at
	 *
	 * @return \DateTime
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}

	/**
	 * Set start
	 *
	 * @param \DateTime $start
	 * @return Schedule
	 */
	public function setStart($start) {
		$this->start = $start;

		return $this;
	}

	/**
	 * Get start
	 *
	 * @return \DateTime
	 */
	public function getStart() {
		return $this->start;
	}

	/**
	 * Add item
	 *
	 * @param \horaro\Library\Entity\ScheduleItem $item
	 * @return Schedule
	 */
	public function addItem(ScheduleItem $item) {
		$this->items[] = $item;

		return $this;
	}

	/**
	 * Remove item
	 *
	 * @param \horaro\Library\Entity\ScheduleItem $item
	 */
	public function removeItem(ScheduleItem $item) {
		$this->items->removeElement($item);
	}

	/**
	 * Get items
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getItems() {
		return $this->items;
	}

	/**
	 * Add column
	 *
	 * @param \horaro\Library\Entity\ScheduleColumn $column
	 * @return Schedule
	 */
	public function addColumn(ScheduleColumn $column) {
		$this->columns[] = $column;

		return $this;
	}

	/**
	 * Remove column
	 *
	 * @param \horaro\Library\Entity\ScheduleColumn $column
	 */
	public function removeColumn(ScheduleColumn $column) {
		$this->columns->removeElement($column);
	}

	/**
	 * Get columns
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getColumns() {
		return $this->columns;
	}

	/**
	 * Set event
	 *
	 * @param \horaro\Library\Entity\Event $event
	 * @return Schedule
	 */
	public function setEvent(Event $event) {
		$this->event = $event;

		return $this;
	}

	/**
	 * Get event
	 *
	 * @return \horaro\Library\Entity\Event
	 */
	public function getEvent() {
		return $this->event;
	}
}