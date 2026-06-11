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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Patch information details
 *
 * @method string getKBNo() Obtain KB No.
 * @method void setKBNo(string $KBNo) Set KB No.
 * @method string getName() Obtain KB name
 * @method void setName(string $Name) Set KB name
 * @method string getPublishTime() Obtain 2025-05
 * @method void setPublishTime(string $PublishTime) Set 2025-05
 * @method array getRelatedCveId() Obtain Vulnerability impacted by KB
 * @method void setRelatedCveId(array $RelatedCveId) Set Vulnerability impacted by KB
 * @method string getKbDocUrl() Obtain KB documentation
 * @method void setKbDocUrl(string $KbDocUrl) Set KB documentation
 * @method integer getId() Obtain KB id No.
 * @method void setId(integer $Id) Set KB id No.
 */
class PatchInfoDetail extends AbstractModel
{
    /**
     * @var string KB No.
     */
    public $KBNo;

    /**
     * @var string KB name
     */
    public $Name;

    /**
     * @var string 2025-05
     */
    public $PublishTime;

    /**
     * @var array Vulnerability impacted by KB
     */
    public $RelatedCveId;

    /**
     * @var string KB documentation
     */
    public $KbDocUrl;

    /**
     * @var integer KB id No.
     */
    public $Id;

    /**
     * @param string $KBNo KB No.
     * @param string $Name KB name
     * @param string $PublishTime 2025-05
     * @param array $RelatedCveId Vulnerability impacted by KB
     * @param string $KbDocUrl KB documentation
     * @param integer $Id KB id No.
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
        if (array_key_exists("KBNo",$param) and $param["KBNo"] !== null) {
            $this->KBNo = $param["KBNo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("RelatedCveId",$param) and $param["RelatedCveId"] !== null) {
            $this->RelatedCveId = $param["RelatedCveId"];
        }

        if (array_key_exists("KbDocUrl",$param) and $param["KbDocUrl"] !== null) {
            $this->KbDocUrl = $param["KbDocUrl"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
