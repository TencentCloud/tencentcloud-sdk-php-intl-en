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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration
 *
 * @method string getName() Obtain Configuration name
 * @method void setName(string $Name) Set Configuration name
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method array getRelatedApplications() Obtain List of associated applications
 * @method void setRelatedApplications(array $RelatedApplications) Set List of associated applications
 * @method array getData() Obtain Configuration item
 * @method void setData(array $Data) Set Configuration item
 */
class ConfigData extends AbstractModel
{
    /**
     * @var string Configuration name
     */
    public $Name;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var array List of associated applications
     */
    public $RelatedApplications;

    /**
     * @var array Configuration item
     */
    public $Data;

    /**
     * @param string $Name Configuration name
     * @param string $CreateTime Creation time.
     * @param array $RelatedApplications List of associated applications
     * @param array $Data Configuration item
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RelatedApplications",$param) and $param["RelatedApplications"] !== null) {
            $this->RelatedApplications = [];
            foreach ($param["RelatedApplications"] as $key => $value){
                $obj = new TemService();
                $obj->deserialize($value);
                array_push($this->RelatedApplications, $obj);
            }
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
