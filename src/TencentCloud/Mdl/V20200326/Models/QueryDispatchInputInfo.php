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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The stream status of the queried input.
 *
 * @method string getInputID() Obtain The input ID.
 * @method void setInputID(string $InputID) Set The input ID.
 * @method string getInputName() Obtain The input name.
 * @method void setInputName(string $InputName) Set The input name.
 * @method string getProtocol() Obtain The input protocol.
 * @method void setProtocol(string $Protocol) Set The input protocol.
 * @method array getInputStreamInfoList() Obtain The stream status of the input.
 * @method void setInputStreamInfoList(array $InputStreamInfoList) Set The stream status of the input.
 */
class QueryDispatchInputInfo extends AbstractModel
{
    /**
     * @var string The input ID.
     */
    public $InputID;

    /**
     * @var string The input name.
     */
    public $InputName;

    /**
     * @var string The input protocol.
     */
    public $Protocol;

    /**
     * @var array The stream status of the input.
     */
    public $InputStreamInfoList;

    /**
     * @param string $InputID The input ID.
     * @param string $InputName The input name.
     * @param string $Protocol The input protocol.
     * @param array $InputStreamInfoList The stream status of the input.
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
        if (array_key_exists("InputID",$param) and $param["InputID"] !== null) {
            $this->InputID = $param["InputID"];
        }

        if (array_key_exists("InputName",$param) and $param["InputName"] !== null) {
            $this->InputName = $param["InputName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InputStreamInfoList",$param) and $param["InputStreamInfoList"] !== null) {
            $this->InputStreamInfoList = [];
            foreach ($param["InputStreamInfoList"] as $key => $value){
                $obj = new InputStreamInfo();
                $obj->deserialize($value);
                array_push($this->InputStreamInfoList, $obj);
            }
        }
    }
}
