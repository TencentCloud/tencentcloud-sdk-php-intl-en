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
 * Quality data returned by ES
 *
 * @method array getContent() Obtain Data content
 * @method void setContent(array $Content) Set Data content
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getPeerId() Obtain Peer ID. An empty value indicates that the returned data is upstream.
 * @method void setPeerId(string $PeerId) Set Peer ID. An empty value indicates that the returned data is upstream.
 * @method string getDataType() Obtain Data type
 * @method void setDataType(string $DataType) Set Data type
 */
class QualityData extends AbstractModel
{
    /**
     * @var array Data content
     */
    public $Content;

    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string Peer ID. An empty value indicates that the returned data is upstream.
     */
    public $PeerId;

    /**
     * @var string Data type
     */
    public $DataType;

    /**
     * @param array $Content Data content
     * @param string $UserId User ID
     * @param string $PeerId Peer ID. An empty value indicates that the returned data is upstream.
     * @param string $DataType Data type
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
