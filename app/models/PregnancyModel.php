<?php

class PregnancyModel {
  private $id;
  private $weeks;
  private $riskPregnant;
  private $user;

  function __construct(stdClass $data) {
    $this->id = $data->id ?? null;
    $this->weeks = $data->weeks ?? null;
    $this->riskPregnant = $data->riskPregnant ?? null;
    $this->user = $data->user ?? null;
  }

  public function getId() {
    return $this->id;
  }

  public function getWeeks() {
    return $this->weeks;
  }

  public function isRiskPregnant() {
    return $this->riskPregnant ? 1 : 0;
  }

  public function getUser() {
    return $this->user;
  }

  public function getJsonSerialized() {
    return [
      'weeks' => $this->weeks,
      'risk-pregnant' => $this->riskPregnant,
      'user' => $this->user->getJsonSerialized()
    ];
  }
}
