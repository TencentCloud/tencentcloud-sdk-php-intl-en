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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Signature modification response 
 *
 * @method integer getSignId() Obtain Signature ID
 * @method void setSignId(integer $SignId) Set Signature ID
 * @method string getSignApplyId() Obtain Signature modification application ID
 * @method void setSignApplyId(string $SignApplyId) Set Signature modification application ID
 */
class ModifySignStatus extends AbstractModel
{
    /**
     * @var integer Signature ID
     */
    public $SignId;

    /**
     * @var string Signature modification application ID
     */
    public $SignApplyId;

    /**
     * @param integer $SignId Signature ID
     * @param string $SignApplyId Signature modification application ID
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("SignApplyId",$param) and $param["SignApplyId"] !== null) {
            $this->SignApplyId = $param["SignApplyId"];
        }
    }
}
