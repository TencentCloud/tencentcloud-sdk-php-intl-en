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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSelectDoc request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getFileName() Obtain Document name.

 * @method void setFileName(string $FileName) Set Document name.

 * @method array getStatus() Obtain Document status: 7: under review; 8: review failed; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 20: expired.
 * @method void setStatus(array $Status) Set Document status: 7: under review; 8: review failed; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 20: expired.
 */
class ListSelectDocRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Document name.

     */
    public $FileName;

    /**
     * @var array Document status: 7: under review; 8: review failed; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 20: expired.
     */
    public $Status;

    /**
     * @param string $BotBizId Application ID.
     * @param string $FileName Document name.

     * @param array $Status Document status: 7: under review; 8: review failed; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 20: expired.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
