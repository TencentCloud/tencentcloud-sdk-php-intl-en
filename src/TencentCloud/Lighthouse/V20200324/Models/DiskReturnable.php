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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the returnable cloud disk
 *
 * @method string getDiskId() Obtain Cloud disk ID.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID.
 * @method boolean getIsReturnable() Obtain Whether the cloud disk can be returned.
 * @method void setIsReturnable(boolean $IsReturnable) Set Whether the cloud disk can be returned.
 * @method integer getReturnFailCode() Obtain Error code of cloud disk return failure.
 * @method void setReturnFailCode(integer $ReturnFailCode) Set Error code of cloud disk return failure.
 * @method string getReturnFailMessage() Obtain Error message of cloud disk return failure.
 * @method void setReturnFailMessage(string $ReturnFailMessage) Set Error message of cloud disk return failure.
 */
class DiskReturnable extends AbstractModel
{
    /**
     * @var string Cloud disk ID.
     */
    public $DiskId;

    /**
     * @var boolean Whether the cloud disk can be returned.
     */
    public $IsReturnable;

    /**
     * @var integer Error code of cloud disk return failure.
     */
    public $ReturnFailCode;

    /**
     * @var string Error message of cloud disk return failure.
     */
    public $ReturnFailMessage;

    /**
     * @param string $DiskId Cloud disk ID.
     * @param boolean $IsReturnable Whether the cloud disk can be returned.
     * @param integer $ReturnFailCode Error code of cloud disk return failure.
     * @param string $ReturnFailMessage Error message of cloud disk return failure.
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("ReturnFailMessage",$param) and $param["ReturnFailMessage"] !== null) {
            $this->ReturnFailMessage = $param["ReturnFailMessage"];
        }
    }
}
