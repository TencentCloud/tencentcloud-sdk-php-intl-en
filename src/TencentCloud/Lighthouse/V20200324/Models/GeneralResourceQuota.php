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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General resource quota information.


 *
 * @method string getResourceName() Obtain Resource name.
 * @method void setResourceName(string $ResourceName) Set Resource name.
 * @method integer getResourceQuotaAvailable() Obtain Number of available resources.
 * @method void setResourceQuotaAvailable(integer $ResourceQuotaAvailable) Set Number of available resources.
 * @method integer getResourceQuotaTotal() Obtain Total number of resources.
 * @method void setResourceQuotaTotal(integer $ResourceQuotaTotal) Set Total number of resources.
 */
class GeneralResourceQuota extends AbstractModel
{
    /**
     * @var string Resource name.
     */
    public $ResourceName;

    /**
     * @var integer Number of available resources.
     */
    public $ResourceQuotaAvailable;

    /**
     * @var integer Total number of resources.
     */
    public $ResourceQuotaTotal;

    /**
     * @param string $ResourceName Resource name.
     * @param integer $ResourceQuotaAvailable Number of available resources.
     * @param integer $ResourceQuotaTotal Total number of resources.
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceQuotaAvailable",$param) and $param["ResourceQuotaAvailable"] !== null) {
            $this->ResourceQuotaAvailable = $param["ResourceQuotaAvailable"];
        }

        if (array_key_exists("ResourceQuotaTotal",$param) and $param["ResourceQuotaTotal"] !== null) {
            $this->ResourceQuotaTotal = $param["ResourceQuotaTotal"];
        }
    }
}
