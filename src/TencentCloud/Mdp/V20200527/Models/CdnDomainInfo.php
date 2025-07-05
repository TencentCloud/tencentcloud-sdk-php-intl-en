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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getTotalSize() Obtain 
 * @method void setTotalSize(integer $TotalSize) Set 
 * @method array getRecords() Obtain 
 * @method void setRecords(array $Records) Set 
 */
class CdnDomainInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $TotalSize;

    /**
     * @var array 
     */
    public $Records;

    /**
     * @param integer $TotalSize 
     * @param array $Records 
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
        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new DomainRecordInfo();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }
    }
}
