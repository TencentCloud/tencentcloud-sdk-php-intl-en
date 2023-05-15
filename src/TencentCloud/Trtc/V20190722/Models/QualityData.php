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
 * The quality data returned by ES.
 *
 * @method array getContent() Obtain The quality data.
 * @method void setContent(array $Content) Set The quality data.
 * @method string getUserId() Obtain The user ID.
 * @method void setUserId(string $UserId) Set The user ID.
 * @method string getPeerId() Obtain The remote user ID. An empty string indicates that the data is upstream data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeerId(string $PeerId) Set The remote user ID. An empty string indicates that the data is upstream data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataType() Obtain The data type.
 * @method void setDataType(string $DataType) Set The data type.
 */
class QualityData extends AbstractModel
{
    /**
     * @var array The quality data.
     */
    public $Content;

    /**
     * @var string The user ID.
     */
    public $UserId;

    /**
     * @var string The remote user ID. An empty string indicates that the data is upstream data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeerId;

    /**
     * @var string The data type.
     */
    public $DataType;

    /**
     * @param array $Content The quality data.
     * @param string $UserId The user ID.
     * @param string $PeerId The remote user ID. An empty string indicates that the data is upstream data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataType The data type.
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PeerId",$param) and $param["PeerId"] !== null) {
            $this->PeerId = $param["PeerId"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
