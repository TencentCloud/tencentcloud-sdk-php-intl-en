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
 * CreateReceiverDetailWithData request structure.
 *
 * @method integer getReceiverId() Obtain Recipient list ID.
 * @method void setReceiverId(integer $ReceiverId) Set Recipient list ID.
 * @method array getDatas() Obtain Recipient mailbox and template parameters in array format. limit on the number of recipients not exceeding 20000.
 * @method void setDatas(array $Datas) Set Recipient mailbox and template parameters in array format. limit on the number of recipients not exceeding 20000.
 */
class CreateReceiverDetailWithDataRequest extends AbstractModel
{
    /**
     * @var integer Recipient list ID.
     */
    public $ReceiverId;

    /**
     * @var array Recipient mailbox and template parameters in array format. limit on the number of recipients not exceeding 20000.
     */
    public $Datas;

    /**
     * @param integer $ReceiverId Recipient list ID.
     * @param array $Datas Recipient mailbox and template parameters in array format. limit on the number of recipients not exceeding 20000.
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

        if (array_key_exists("Datas",$param) and $param["Datas"] !== null) {
            $this->Datas = [];
            foreach ($param["Datas"] as $key => $value){
                $obj = new ReceiverInputData();
                $obj->deserialize($value);
                array_push($this->Datas, $obj);
            }
        }
    }
}
