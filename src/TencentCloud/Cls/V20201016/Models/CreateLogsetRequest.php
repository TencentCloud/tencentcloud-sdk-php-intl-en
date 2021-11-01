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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLogset request structure.
 *
 * @method string getLogsetName() Obtain Logset name, which must be unique
 * @method void setLogsetName(string $LogsetName) Set Logset name, which must be unique
 * @method array getTags() Obtain Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
 * @method void setTags(array $Tags) Set Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
 */
class CreateLogsetRequest extends AbstractModel
{
    /**
     * @var string Logset name, which must be unique
     */
    public $LogsetName;

    /**
     * @var array Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
     */
    public $Tags;

    /**
     * @param string $LogsetName Logset name, which must be unique
     * @param array $Tags Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
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
        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
