<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud resource configuration detection compliance standard overview
 *
 * @method integer getID() Obtain <p>Standard ID</p>
 * @method void setID(integer $ID) Set <p>Standard ID</p>
 * @method string getName() Obtain <p>Specification name</p>
 * @method void setName(string $Name) Set <p>Specification name</p>
 * @method integer getTotalCount() Obtain <p>Number of associated check items</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Number of associated check items</p>
 * @method integer getPassRate() Obtain <p>Check item pass rate</p>
 * @method void setPassRate(integer $PassRate) Set <p>Check item pass rate</p>
 */
class ComplianceStandardOverview extends AbstractModel
{
    /**
     * @var integer <p>Standard ID</p>
     */
    public $ID;

    /**
     * @var string <p>Specification name</p>
     */
    public $Name;

    /**
     * @var integer <p>Number of associated check items</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>Check item pass rate</p>
     */
    public $PassRate;

    /**
     * @param integer $ID <p>Standard ID</p>
     * @param string $Name <p>Specification name</p>
     * @param integer $TotalCount <p>Number of associated check items</p>
     * @param integer $PassRate <p>Check item pass rate</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }
    }
}
