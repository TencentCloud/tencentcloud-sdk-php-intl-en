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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration description of the file system (cfs)
 *
 * @method array getCfsInsList() Obtain List of file system information
 * @method void setCfsInsList(array $CfsInsList) Set List of file system information
 */
class CfsConfig extends AbstractModel
{
    /**
     * @var array List of file system information
     */
    public $CfsInsList;

    /**
     * @param array $CfsInsList List of file system information
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
        if (array_key_exists("CfsInsList",$param) and $param["CfsInsList"] !== null) {
            $this->CfsInsList = [];
            foreach ($param["CfsInsList"] as $key => $value){
                $obj = new CfsInsInfo();
                $obj->deserialize($value);
                array_push($this->CfsInsList, $obj);
            }
        }
    }
}
