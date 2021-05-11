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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of API document
 *
 * @method string getApiDocId() Obtain API document ID
 * @method void setApiDocId(string $ApiDocId) Set API document ID
 * @method string getApiDocName() Obtain API document name
 * @method void setApiDocName(string $ApiDocName) Set API document name
 * @method string getApiDocStatus() Obtain API document build status
 * @method void setApiDocStatus(string $ApiDocStatus) Set API document build status
 */
class APIDoc extends AbstractModel
{
    /**
     * @var string API document ID
     */
    public $ApiDocId;

    /**
     * @var string API document name
     */
    public $ApiDocName;

    /**
     * @var string API document build status
     */
    public $ApiDocStatus;

    /**
     * @param string $ApiDocId API document ID
     * @param string $ApiDocName API document name
     * @param string $ApiDocStatus API document build status
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
        if (array_key_exists("ApiDocId",$param) and $param["ApiDocId"] !== null) {
            $this->ApiDocId = $param["ApiDocId"];
        }

        if (array_key_exists("ApiDocName",$param) and $param["ApiDocName"] !== null) {
            $this->ApiDocName = $param["ApiDocName"];
        }

        if (array_key_exists("ApiDocStatus",$param) and $param["ApiDocStatus"] !== null) {
            $this->ApiDocStatus = $param["ApiDocStatus"];
        }
    }
}
