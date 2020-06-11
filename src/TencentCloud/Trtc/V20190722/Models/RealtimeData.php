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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned data of seconds-level monitoring
 *
 * @method array getContent() Obtain Returned data
 * @method void setContent(array $Content) Set Returned data
 * @method string getDataType() Obtain Data type field
 * @method void setDataType(string $DataType) Set Data type field
 */
class RealtimeData extends AbstractModel
{
    /**
     * @var array Returned data
     */
    public $Content;

    /**
     * @var string Data type field
     */
    public $DataType;

    /**
     * @param array $Content Returned data
     * @param string $DataType Data type field
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new TimeValue();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
