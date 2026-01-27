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
 * ListReceiverDetails request structure.
 *
 * @method integer getReceiverId() Obtain Recipient list ID. specifies the value returned during API creation of a recipient list via the CreateReceiver api.
 * @method void setReceiverId(integer $ReceiverId) Set Recipient list ID. specifies the value returned during API creation of a recipient list via the CreateReceiver api.
 * @method integer getOffset() Obtain Offset, int, starts from 0.
 * @method void setOffset(integer $Offset) Set Offset, int, starts from 0.
 * @method integer getLimit() Obtain Number limit, int, no more than 100.
 * @method void setLimit(integer $Limit) Set Number limit, int, no more than 100.
 * @method string getEmail() Obtain Recipient address. length: 0-50. example: xxx@te.com. fuzzy query is supported.
 * @method void setEmail(string $Email) Set Recipient address. length: 0-50. example: xxx@te.com. fuzzy query is supported.
 * @method string getCreateTimeBegin() Obtain Find start time.
 * @method void setCreateTimeBegin(string $CreateTimeBegin) Set Find start time.
 * @method string getCreateTimeEnd() Obtain Search end time.
 * @method void setCreateTimeEnd(string $CreateTimeEnd) Set Search end time.
 * @method integer getStatus() Obtain 1: valid; 2: invalid.
 * @method void setStatus(integer $Status) Set 1: valid; 2: invalid.
 */
class ListReceiverDetailsRequest extends AbstractModel
{
    /**
     * @var integer Recipient list ID. specifies the value returned during API creation of a recipient list via the CreateReceiver api.
     */
    public $ReceiverId;

    /**
     * @var integer Offset, int, starts from 0.
     */
    public $Offset;

    /**
     * @var integer Number limit, int, no more than 100.
     */
    public $Limit;

    /**
     * @var string Recipient address. length: 0-50. example: xxx@te.com. fuzzy query is supported.
     */
    public $Email;

    /**
     * @var string Find start time.
     */
    public $CreateTimeBegin;

    /**
     * @var string Search end time.
     */
    public $CreateTimeEnd;

    /**
     * @var integer 1: valid; 2: invalid.
     */
    public $Status;

    /**
     * @param integer $ReceiverId Recipient list ID. specifies the value returned during API creation of a recipient list via the CreateReceiver api.
     * @param integer $Offset Offset, int, starts from 0.
     * @param integer $Limit Number limit, int, no more than 100.
     * @param string $Email Recipient address. length: 0-50. example: xxx@te.com. fuzzy query is supported.
     * @param string $CreateTimeBegin Find start time.
     * @param string $CreateTimeEnd Search end time.
     * @param integer $Status 1: valid; 2: invalid.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CreateTimeBegin",$param) and $param["CreateTimeBegin"] !== null) {
            $this->CreateTimeBegin = $param["CreateTimeBegin"];
        }

        if (array_key_exists("CreateTimeEnd",$param) and $param["CreateTimeEnd"] !== null) {
            $this->CreateTimeEnd = $param["CreateTimeEnd"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
