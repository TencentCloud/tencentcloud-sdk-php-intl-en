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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recipient group data type
 *
 * @method integer getReceiverId() Obtain Recipient group ID
 * @method void setReceiverId(integer $ReceiverId) Set Recipient group ID
 * @method string getReceiversName() Obtain Recipient group name
 * @method void setReceiversName(string $ReceiversName) Set Recipient group name
 * @method integer getCount() Obtain Total number of recipient email addresses
 * @method void setCount(integer $Count) Set Total number of recipient email addresses
 * @method string getDesc() Obtain Recipient group description
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setDesc(string $Desc) Set Recipient group description
Note: This field may return `null`, indicating that no valid value can be found.
 * @method integer getReceiversStatus() Obtain Group status (`1`: to be uploaded; `2` uploading; `3` uploaded)
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setReceiversStatus(integer $ReceiversStatus) Set Group status (`1`: to be uploaded; `2` uploading; `3` uploaded)
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getCreateTime() Obtain Creation time, such as 2021-09-28 16:40:35
 * @method void setCreateTime(string $CreateTime) Set Creation time, such as 2021-09-28 16:40:35
 */
class ReceiverData extends AbstractModel
{
    /**
     * @var integer Recipient group ID
     */
    public $ReceiverId;

    /**
     * @var string Recipient group name
     */
    public $ReceiversName;

    /**
     * @var integer Total number of recipient email addresses
     */
    public $Count;

    /**
     * @var string Recipient group description
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Desc;

    /**
     * @var integer Group status (`1`: to be uploaded; `2` uploading; `3` uploaded)
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $ReceiversStatus;

    /**
     * @var string Creation time, such as 2021-09-28 16:40:35
     */
    public $CreateTime;

    /**
     * @param integer $ReceiverId Recipient group ID
     * @param string $ReceiversName Recipient group name
     * @param integer $Count Total number of recipient email addresses
     * @param string $Desc Recipient group description
Note: This field may return `null`, indicating that no valid value can be found.
     * @param integer $ReceiversStatus Group status (`1`: to be uploaded; `2` uploading; `3` uploaded)
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $CreateTime Creation time, such as 2021-09-28 16:40:35
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
        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("ReceiversName",$param) and $param["ReceiversName"] !== null) {
            $this->ReceiversName = $param["ReceiversName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ReceiversStatus",$param) and $param["ReceiversStatus"] !== null) {
            $this->ReceiversStatus = $param["ReceiversStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
