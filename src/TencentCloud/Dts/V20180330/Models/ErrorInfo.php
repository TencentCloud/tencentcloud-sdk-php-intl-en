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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Message and prompt for migration task error
 *
 * @method string getErrorLog() Obtain Specific error log, including error code and error message
 * @method void setErrorLog(string $ErrorLog) Set Specific error log, including error code and error message
 * @method string getHelpDoc() Obtain Help document URL corresponding to error
 * @method void setHelpDoc(string $HelpDoc) Set Help document URL corresponding to error
 */
class ErrorInfo extends AbstractModel
{
    /**
     * @var string Specific error log, including error code and error message
     */
    public $ErrorLog;

    /**
     * @var string Help document URL corresponding to error
     */
    public $HelpDoc;

    /**
     * @param string $ErrorLog Specific error log, including error code and error message
     * @param string $HelpDoc Help document URL corresponding to error
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
        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }
    }
}
