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
 * ModifyReverseShellSystemPolicyConfig request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method boolean getInnerNetAlarmShow() Obtain <p>Intranet alert display</p>
 * @method void setInnerNetAlarmShow(boolean $InnerNetAlarmShow) Set <p>Intranet alert display</p>
 * @method boolean getInnerIPShow() Obtain <p>Display internal ip</p>
 * @method void setInnerIPShow(boolean $InnerIPShow) Set <p>Display internal ip</p>
 * @method integer getCWPScope() Obtain <p>Host range: 0-Specified 1-All 2-Professional Edition 3-Flagship Edition 4-Professional + Flagship</p>
 * @method void setCWPScope(integer $CWPScope) Set <p>Host range: 0-Specified 1-All 2-Professional Edition 3-Flagship Edition 4-Professional + Flagship</p>
 * @method array getInstanceIDsWithAppId() Obtain <p>Specified host list (used when CWPScope=0)</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) Set <p>Specified host list (used when CWPScope=0)</p>
 * @method array getExcludeInstanceIDsWithAppId() Obtain <p>Host exclusion list</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) Set <p>Host exclusion list</p>
 * @method array getTagIDs() Obtain <p>Tag ID list</p>
 * @method void setTagIDs(array $TagIDs) Set <p>Tag ID list</p>
 * @method integer getTCSSScope() Obtain <p>Container scope: 0-within specified clusters 1-all clusters</p>
 * @method void setTCSSScope(integer $TCSSScope) Set <p>Container scope: 0-within specified clusters 1-all clusters</p>
 * @method array getClusterIDsWithAppId() Obtain <p>Specify the cluster list (used when TCSSScope=0)</p>
 * @method void setClusterIDsWithAppId(array $ClusterIDsWithAppId) Set <p>Specify the cluster list (used when TCSSScope=0)</p>
 * @method array getExcludeClusterIDsWithAppId() Obtain <p>Cluster exclusion list</p>
 * @method void setExcludeClusterIDsWithAppId(array $ExcludeClusterIDsWithAppId) Set <p>Cluster exclusion list</p>
 */
class ModifyReverseShellSystemPolicyConfigRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var boolean <p>Intranet alert display</p>
     */
    public $InnerNetAlarmShow;

    /**
     * @var boolean <p>Display internal ip</p>
     */
    public $InnerIPShow;

    /**
     * @var integer <p>Host range: 0-Specified 1-All 2-Professional Edition 3-Flagship Edition 4-Professional + Flagship</p>
     */
    public $CWPScope;

    /**
     * @var array <p>Specified host list (used when CWPScope=0)</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>Host exclusion list</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>Tag ID list</p>
     */
    public $TagIDs;

    /**
     * @var integer <p>Container scope: 0-within specified clusters 1-all clusters</p>
     */
    public $TCSSScope;

    /**
     * @var array <p>Specify the cluster list (used when TCSSScope=0)</p>
     */
    public $ClusterIDsWithAppId;

    /**
     * @var array <p>Cluster exclusion list</p>
     */
    public $ExcludeClusterIDsWithAppId;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param boolean $InnerNetAlarmShow <p>Intranet alert display</p>
     * @param boolean $InnerIPShow <p>Display internal ip</p>
     * @param integer $CWPScope <p>Host range: 0-Specified 1-All 2-Professional Edition 3-Flagship Edition 4-Professional + Flagship</p>
     * @param array $InstanceIDsWithAppId <p>Specified host list (used when CWPScope=0)</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>Host exclusion list</p>
     * @param array $TagIDs <p>Tag ID list</p>
     * @param integer $TCSSScope <p>Container scope: 0-within specified clusters 1-all clusters</p>
     * @param array $ClusterIDsWithAppId <p>Specify the cluster list (used when TCSSScope=0)</p>
     * @param array $ExcludeClusterIDsWithAppId <p>Cluster exclusion list</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InnerNetAlarmShow",$param) and $param["InnerNetAlarmShow"] !== null) {
            $this->InnerNetAlarmShow = $param["InnerNetAlarmShow"];
        }

        if (array_key_exists("InnerIPShow",$param) and $param["InnerIPShow"] !== null) {
            $this->InnerIPShow = $param["InnerIPShow"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ClusterIDsWithAppId",$param) and $param["ClusterIDsWithAppId"] !== null) {
            $this->ClusterIDsWithAppId = [];
            foreach ($param["ClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeClusterIDsWithAppId",$param) and $param["ExcludeClusterIDsWithAppId"] !== null) {
            $this->ExcludeClusterIDsWithAppId = [];
            foreach ($param["ExcludeClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeClusterIDsWithAppId, $obj);
            }
        }
    }
}
