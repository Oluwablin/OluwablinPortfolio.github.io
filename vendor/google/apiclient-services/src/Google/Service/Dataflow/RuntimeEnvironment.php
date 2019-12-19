<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Dataflow_RuntimeEnvironment extends Google_Collection
{
  protected $collection_key = 'additionalExperiments';
  public $additionalExperiments;
  public $additionalUserLabels;
  public $bypassTempDirValidation;
  public $kmsKeyName;
  public $machineType;
  public $maxWorkers;
  public $network;
  public $numWorkers;
  public $serviceAccountEmail;
  public $subnetwork;
  public $tempLocation;
  public $usePrivateIps;
  public $workerRegion;
  public $workerZone;
  public $zone;

  public function setAdditionalExperiments($additionalExperiments)
  {
    $this->additionalExperiments = $additionalExperiments;
  }
  public function getAdditionalExperiments()
  {
    return $this->additionalExperiments;
  }
  public function setAdditionalUserLabels($additionalUserLabels)
  {
    $this->additionalUserLabels = $additionalUserLabels;
  }
  public function getAdditionalUserLabels()
  {
    return $this->additionalUserLabels;
  }
  public function setBypassTempDirValidation($bypassTempDirValidation)
  {
    $this->bypassTempDirValidation = $bypassTempDirValidation;
  }
  public function getBypassTempDirValidation()
  {
    return $this->bypassTempDirValidation;
  }
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  public function getMachineType()
  {
    return $this->machineType;
  }
  public function setMaxWorkers($maxWorkers)
  {
    $this->maxWorkers = $maxWorkers;
  }
  public function getMaxWorkers()
  {
    return $this->maxWorkers;
  }
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  public function getNetwork()
  {
    return $this->network;
  }
  public function setNumWorkers($numWorkers)
  {
    $this->numWorkers = $numWorkers;
  }
  public function getNumWorkers()
  {
    return $this->numWorkers;
  }
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  public function setTempLocation($tempLocation)
  {
    $this->tempLocation = $tempLocation;
  }
  public function getTempLocation()
  {
    return $this->tempLocation;
  }
  public function setUsePrivateIps($usePrivateIps)
  {
    $this->usePrivateIps = $usePrivateIps;
  }
  public function getUsePrivateIps()
  {
    return $this->usePrivateIps;
  }
  public function setWorkerRegion($workerRegion)
  {
    $this->workerRegion = $workerRegion;
  }
  public function getWorkerRegion()
  {
    return $this->workerRegion;
  }
  public function setWorkerZone($workerZone)
  {
    $this->workerZone = $workerZone;
  }
  public function getWorkerZone()
  {
    return $this->workerZone;
  }
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  public function getZone()
  {
    return $this->zone;
  }
}
