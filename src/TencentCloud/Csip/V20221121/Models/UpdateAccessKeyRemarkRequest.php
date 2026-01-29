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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAccessKeyRemark request structure.
 *
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getSourceIPList() Obtain Source IP name.
 * @method void setSourceIPList(array $SourceIPList) Set Source IP name.
 * @method array getAccessKeyList() Obtain ak name.
 * @method void setAccessKeyList(array $AccessKeyList) Set ak name.
 * @method array getSourceIPIDList() Obtain ID of the source IP.
 * @method void setSourceIPIDList(array $SourceIPIDList) Set ID of the source IP.
 * @method array getAccessKeyIDList() Obtain AK ID.
 * @method void setAccessKeyIDList(array $AccessKeyIDList) Set AK ID.
 */
class UpdateAccessKeyRemarkRequest extends AbstractModel
{
    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Source IP name.
     */
    public $SourceIPList;

    /**
     * @var array ak name.
     */
    public $AccessKeyList;

    /**
     * @var array ID of the source IP.
     */
    public $SourceIPIDList;

    /**
     * @var array AK ID.
     */
    public $AccessKeyIDList;

    /**
     * @param string $Remark Remarks
     * @param array $MemberId Group Account Member ID
     * @param array $SourceIPList Source IP name.
     * @param array $AccessKeyList ak name.
     * @param array $SourceIPIDList ID of the source IP.
     * @param array $AccessKeyIDList AK ID.
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
        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("SourceIPList",$param) and $param["SourceIPList"] !== null) {
            $this->SourceIPList = $param["SourceIPList"];
        }

        if (array_key_exists("AccessKeyList",$param) and $param["AccessKeyList"] !== null) {
            $this->AccessKeyList = $param["AccessKeyList"];
        }

        if (array_key_exists("SourceIPIDList",$param) and $param["SourceIPIDList"] !== null) {
            $this->SourceIPIDList = $param["SourceIPIDList"];
        }

        if (array_key_exists("AccessKeyIDList",$param) and $param["AccessKeyIDList"] !== null) {
            $this->AccessKeyIDList = $param["AccessKeyIDList"];
        }
    }
}
