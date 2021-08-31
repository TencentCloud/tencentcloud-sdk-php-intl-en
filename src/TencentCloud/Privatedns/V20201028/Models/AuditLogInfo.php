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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log details
 *
 * @method string getDate() Obtain Time
 * @method void setDate(string $Date) Set Time
 * @method string getOperatorUin() Obtain Operator UIN
 * @method void setOperatorUin(string $OperatorUin) Set Operator UIN
 * @method string getContent() Obtain Log content
 * @method void setContent(string $Content) Set Log content
 */
class AuditLogInfo extends AbstractModel
{
    /**
     * @var string Time
     */
    public $Date;

    /**
     * @var string Operator UIN
     */
    public $OperatorUin;

    /**
     * @var string Log content
     */
    public $Content;

    /**
     * @param string $Date Time
     * @param string $OperatorUin Operator UIN
     * @param string $Content Log content
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
