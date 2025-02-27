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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of CDN instances - data structure of an async task for querying associated cloud resources
 *
 * @method integer getTotalCount() Obtain The total number of CDN domains in this region.	
 * @method void setTotalCount(integer $TotalCount) Set The total number of CDN domains in this region.	
 * @method array getInstanceList() Obtain CDN domain name details.	
 * @method void setInstanceList(array $InstanceList) Set CDN domain name details.	
 * @method string getError() Obtain Whether to query exceptions.
 * @method void setError(string $Error) Set Whether to query exceptions.
 */
class CdnInstanceList extends AbstractModel
{
    /**
     * @var integer The total number of CDN domains in this region.	
     */
    public $TotalCount;

    /**
     * @var array CDN domain name details.	
     */
    public $InstanceList;

    /**
     * @var string Whether to query exceptions.
     */
    public $Error;

    /**
     * @param integer $TotalCount The total number of CDN domains in this region.	
     * @param array $InstanceList CDN domain name details.	
     * @param string $Error Whether to query exceptions.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new CdnInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
