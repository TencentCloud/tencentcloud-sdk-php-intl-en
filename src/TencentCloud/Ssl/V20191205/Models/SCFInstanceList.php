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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF Instance Details - Asynchronous Associate Cloud Resources Data Structure
 *
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method array getInstanceList() Obtain <p>SCF instance details</p>
 * @method void setInstanceList(array $InstanceList) Set <p>SCF instance details</p>
 * @method string getError() Obtain <p>Error message</p>
 * @method void setError(string $Error) Set <p>Error message</p>
 * @method integer getTotalCount() Obtain <p>Total count in the region</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total count in the region</p>
 */
class SCFInstanceList extends AbstractModel
{
    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var array <p>SCF instance details</p>
     */
    public $InstanceList;

    /**
     * @var string <p>Error message</p>
     */
    public $Error;

    /**
     * @var integer <p>Total count in the region</p>
     */
    public $TotalCount;

    /**
     * @param string $Region <p>Region.</p>
     * @param array $InstanceList <p>SCF instance details</p>
     * @param string $Error <p>Error message</p>
     * @param integer $TotalCount <p>Total count in the region</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new SCFInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
