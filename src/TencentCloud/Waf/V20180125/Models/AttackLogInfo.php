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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attack Log Details
 *
 * @method string getContent() Obtain Details of Attack Logs
 * @method void setContent(string $Content) Set Details of Attack Logs
 * @method string getFileName() Obtain CLS Returned Content
 * @method void setFileName(string $FileName) Set CLS Returned Content
 * @method string getSource() Obtain CLS Returned Content
 * @method void setSource(string $Source) Set CLS Returned Content
 * @method string getTimeStamp() Obtain CLS Returned Content
 * @method void setTimeStamp(string $TimeStamp) Set CLS Returned Content
 */
class AttackLogInfo extends AbstractModel
{
    /**
     * @var string Details of Attack Logs
     */
    public $Content;

    /**
     * @var string CLS Returned Content
     */
    public $FileName;

    /**
     * @var string CLS Returned Content
     */
    public $Source;

    /**
     * @var string CLS Returned Content
     */
    public $TimeStamp;

    /**
     * @param string $Content Details of Attack Logs
     * @param string $FileName CLS Returned Content
     * @param string $Source CLS Returned Content
     * @param string $TimeStamp CLS Returned Content
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
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }
    }
}
