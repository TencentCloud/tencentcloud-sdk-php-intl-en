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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Screenshot list
 *
 * @method string getPicType() Obtain Image export type. Valid values: Base64, and URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPicType(string $PicType) Set Image export type. Valid values: Base64, and URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getList() Obtain Image list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setList(array $List) Set Image list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTranId() Obtain Async transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranId(string $TranId) Set Async transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranStatus() Obtain Transaction status.
1: processing; 2: processing successful; 3: processing failed (error content in outer Msg).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranStatus(integer $TranStatus) Set Transaction status.
1: processing; 2: processing successful; 3: processing failed (error content in outer Msg).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PageScreenListVO extends AbstractModel
{
    /**
     * @var string Image export type. Valid values: Base64, and URL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PicType;

    /**
     * @var array Image list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $List;

    /**
     * @var string Async transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranId;

    /**
     * @var integer Transaction status.
1: processing; 2: processing successful; 3: processing failed (error content in outer Msg).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranStatus;

    /**
     * @param string $PicType Image export type. Valid values: Base64, and URL.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $List Image list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TranId Async transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranStatus Transaction status.
1: processing; 2: processing successful; 3: processing failed (error content in outer Msg).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PicType",$param) and $param["PicType"] !== null) {
            $this->PicType = $param["PicType"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new PageScreenVO();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }
    }
}
