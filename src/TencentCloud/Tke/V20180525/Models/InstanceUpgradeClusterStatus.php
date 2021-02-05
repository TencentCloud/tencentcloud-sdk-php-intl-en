<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Current status of the cluster during node upgrade
 *
 * @method integer getPodTotal() Obtain Total Pods
 * @method void setPodTotal(integer $PodTotal) Set Total Pods
 * @method integer getNotReadyPod() Obtain Total number of NotReady Pods
 * @method void setNotReadyPod(integer $NotReadyPod) Set Total number of NotReady Pods
 */
class InstanceUpgradeClusterStatus extends AbstractModel
{
    /**
     * @var integer Total Pods
     */
    public $PodTotal;

    /**
     * @var integer Total number of NotReady Pods
     */
    public $NotReadyPod;

    /**
     * @param integer $PodTotal Total Pods
     * @param integer $NotReadyPod Total number of NotReady Pods
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PodTotal",$param) and $param["PodTotal"] !== null) {
            $this->PodTotal = $param["PodTotal"];
        }

        if (array_key_exists("NotReadyPod",$param) and $param["NotReadyPod"] !== null) {
            $this->NotReadyPod = $param["NotReadyPod"];
        }
    }
}
