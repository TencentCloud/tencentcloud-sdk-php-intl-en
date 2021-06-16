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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getConfigDataName() Obtain 
 * @method void setConfigDataName(string $ConfigDataName) Set 
 * @method string getMountedPath() Obtain 
 * @method void setMountedPath(string $MountedPath) Set 
 * @method array getData() Obtain 
 * @method void setData(array $Data) Set 
 */
class MountedSettingConf extends AbstractModel
{
    /**
     * @var string 
     */
    public $ConfigDataName;

    /**
     * @var string 
     */
    public $MountedPath;

    /**
     * @var array 
     */
    public $Data;

    /**
     * @param string $ConfigDataName 
     * @param string $MountedPath 
     * @param array $Data 
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
        if (array_key_exists("ConfigDataName",$param) and $param["ConfigDataName"] !== null) {
            $this->ConfigDataName = $param["ConfigDataName"];
        }

        if (array_key_exists("MountedPath",$param) and $param["MountedPath"] !== null) {
            $this->MountedPath = $param["MountedPath"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
