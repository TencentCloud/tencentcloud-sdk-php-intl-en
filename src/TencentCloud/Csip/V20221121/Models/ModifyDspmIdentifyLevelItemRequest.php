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
 * ModifyDspmIdentifyLevelItem request structure.
 *
 * @method integer getId() Obtain <p>Level group id</p>
 * @method void setId(integer $Id) Set <p>Level group id</p>
 * @method string getName() Obtain <p>Level group name</p>
 * @method void setName(string $Name) Set <p>Level group name</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getLevelScore() Obtain <p>Sensitivity</p><p>Value range: [1, 10]</p><p>Unit: sensitivity</p>
 * @method void setLevelScore(integer $LevelScore) Set <p>Sensitivity</p><p>Value range: [1, 10]</p><p>Unit: sensitivity</p>
 * @method string getOperationSource() Obtain <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 * @method void setOperationSource(string $OperationSource) Set <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 */
class ModifyDspmIdentifyLevelItemRequest extends AbstractModel
{
    /**
     * @var integer <p>Level group id</p>
     */
    public $Id;

    /**
     * @var string <p>Level group name</p>
     */
    public $Name;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Sensitivity</p><p>Value range: [1, 10]</p><p>Unit: sensitivity</p>
     */
    public $LevelScore;

    /**
     * @var string <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
     */
    public $OperationSource;

    /**
     * @param integer $Id <p>Level group id</p>
     * @param string $Name <p>Level group name</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $LevelScore <p>Sensitivity</p><p>Value range: [1, 10]</p><p>Unit: sensitivity</p>
     * @param string $OperationSource <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }

        if (array_key_exists("OperationSource",$param) and $param["OperationSource"] !== null) {
            $this->OperationSource = $param["OperationSource"];
        }
    }
}
