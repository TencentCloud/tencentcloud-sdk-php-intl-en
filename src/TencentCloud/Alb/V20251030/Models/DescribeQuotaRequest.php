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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQuota request structure.
 *
 * @method array getQuotaTypes() Obtain List of quota types. Supports inputting multiple quota types at the same time. When querying resource-level quotas, can be used in conjunction with ResourceIds to input the corresponding resource IDs. To return the used amount and available amount, input used and available in DisplayFields.

Enumeration description:
- alb_quota_loadbalancers_num: Number of ALB instances creatable per region.
- alb_quota_targetgroups_num: Number of ALB target groups creatable per region.
-alb_quota_loadbalancer_listeners_num: Number of listeners creatable for each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_rules_num: Number of forwarding rules that can be added to each ALB instance, excluding the default rule. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_certificates_num: Number of additional certificates that can be added to each ALB instance, excluding the default certificate. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_targetgroup_num: The number of target groups that can be bound to each ALB instance. Fill in the ALB instance ID in ResourceIds.
-alb_quota_loadbalancer_servers_num: Number of real servers that can be added to each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_server_added_num: Number of times one real server IP can be added to an ALB backend target group.
-alb_quota_targetgroup_attached_num: The number of times each target group can be associated with ALB forwarding rules. Fill in the target group ID in ResourceIds.
-alb_quota_targetgroup_targets_num: Number of real servers supported by each target group. It is applicable to IP and port type backends. For ResourceIds, fill in the target group ID.
-alb_quota_targetgroup_targets_num_scf: Number of SCF function backends supported by each target group. For ResourceIds, fill in the target group ID.
-alb_quota_max_request_timeout: Maximum timeout time configurable for a connection request when a listener is created.
-alb_quota_max_idle_timeout: Maximum idle timeout that can be configured for a connection when a listener is created.
-alb_quota_listener_certificates_num: Number of certificates that can be added to each listener. For ResourceIds, fill in the listener ID.
-alb_quota_rule_targetgroups_num: Number of target groups that can be bound to a forwarding rule.
-alb_quota_rule_conditions_num: Number of match conditions that can be added to a forwarding rule.
-alb_quota_rule_wildcards_num: Number of match entries containing wildcards that can be added to a single forwarding rule.
-alb_quota_rule_actions_num: Number of action entries that can be added to a single forwarding rule.
-alb_quota_cipher_template_listeners_num: Number of listeners that can be associated with each encryption suite template.
-alb_quota_healthcheck_templates_num: Number of health check templates that can be created per region.
-alb_quota_securitygroup_templates_num: Number of security groups that can be bound to one ALB instance.
-alb_quota_securitygroup_rules_per_sg_num: Number of rule entries supported by one security group in one ALB instance.
-alb_quota_security_policies_num: Number of custom security policies creatable per region.
 * @method void setQuotaTypes(array $QuotaTypes) Set List of quota types. Supports inputting multiple quota types at the same time. When querying resource-level quotas, can be used in conjunction with ResourceIds to input the corresponding resource IDs. To return the used amount and available amount, input used and available in DisplayFields.

Enumeration description:
- alb_quota_loadbalancers_num: Number of ALB instances creatable per region.
- alb_quota_targetgroups_num: Number of ALB target groups creatable per region.
-alb_quota_loadbalancer_listeners_num: Number of listeners creatable for each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_rules_num: Number of forwarding rules that can be added to each ALB instance, excluding the default rule. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_certificates_num: Number of additional certificates that can be added to each ALB instance, excluding the default certificate. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_targetgroup_num: The number of target groups that can be bound to each ALB instance. Fill in the ALB instance ID in ResourceIds.
-alb_quota_loadbalancer_servers_num: Number of real servers that can be added to each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_server_added_num: Number of times one real server IP can be added to an ALB backend target group.
-alb_quota_targetgroup_attached_num: The number of times each target group can be associated with ALB forwarding rules. Fill in the target group ID in ResourceIds.
-alb_quota_targetgroup_targets_num: Number of real servers supported by each target group. It is applicable to IP and port type backends. For ResourceIds, fill in the target group ID.
-alb_quota_targetgroup_targets_num_scf: Number of SCF function backends supported by each target group. For ResourceIds, fill in the target group ID.
-alb_quota_max_request_timeout: Maximum timeout time configurable for a connection request when a listener is created.
-alb_quota_max_idle_timeout: Maximum idle timeout that can be configured for a connection when a listener is created.
-alb_quota_listener_certificates_num: Number of certificates that can be added to each listener. For ResourceIds, fill in the listener ID.
-alb_quota_rule_targetgroups_num: Number of target groups that can be bound to a forwarding rule.
-alb_quota_rule_conditions_num: Number of match conditions that can be added to a forwarding rule.
-alb_quota_rule_wildcards_num: Number of match entries containing wildcards that can be added to a single forwarding rule.
-alb_quota_rule_actions_num: Number of action entries that can be added to a single forwarding rule.
-alb_quota_cipher_template_listeners_num: Number of listeners that can be associated with each encryption suite template.
-alb_quota_healthcheck_templates_num: Number of health check templates that can be created per region.
-alb_quota_securitygroup_templates_num: Number of security groups that can be bound to one ALB instance.
-alb_quota_securitygroup_rules_per_sg_num: Number of rule entries supported by one security group in one ALB instance.
-alb_quota_security_policies_num: Number of custom security policies creatable per region.
 * @method array getDisplayFields() Obtain Field display list used to control whether to additionally return usage information. Supports used and available: used means to return the currently used amount, and available means to return the current remaining available amount. QuotaType and Limit are always returned. ResourceId will be returned when ResourceIds are input in the request.
 * @method void setDisplayFields(array $DisplayFields) Set Field display list used to control whether to additionally return usage information. Supports used and available: used means to return the currently used amount, and available means to return the current remaining available amount. QuotaType and Limit are always returned. ResourceId will be returned when ResourceIds are input in the request.
 * @method array getResourceIds() Obtain Resource ID list. Used for querying the quota and amount at the specific resource dimension. If not specified, the default quota configuration at the account or region level is queried. The type of resource ID is determined by QuotaTypes. For example, for ALB instance-level quotas, fill in the ALB instance ID; for listener-level quotas, fill in the listener ID; for target group-level quotas, fill in the target group ID.
 * @method void setResourceIds(array $ResourceIds) Set Resource ID list. Used for querying the quota and amount at the specific resource dimension. If not specified, the default quota configuration at the account or region level is queried. The type of resource ID is determined by QuotaTypes. For example, for ALB instance-level quotas, fill in the ALB instance ID; for listener-level quotas, fill in the listener ID; for target group-level quotas, fill in the target group ID.
 */
class DescribeQuotaRequest extends AbstractModel
{
    /**
     * @var array List of quota types. Supports inputting multiple quota types at the same time. When querying resource-level quotas, can be used in conjunction with ResourceIds to input the corresponding resource IDs. To return the used amount and available amount, input used and available in DisplayFields.

Enumeration description:
- alb_quota_loadbalancers_num: Number of ALB instances creatable per region.
- alb_quota_targetgroups_num: Number of ALB target groups creatable per region.
-alb_quota_loadbalancer_listeners_num: Number of listeners creatable for each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_rules_num: Number of forwarding rules that can be added to each ALB instance, excluding the default rule. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_certificates_num: Number of additional certificates that can be added to each ALB instance, excluding the default certificate. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_targetgroup_num: The number of target groups that can be bound to each ALB instance. Fill in the ALB instance ID in ResourceIds.
-alb_quota_loadbalancer_servers_num: Number of real servers that can be added to each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_server_added_num: Number of times one real server IP can be added to an ALB backend target group.
-alb_quota_targetgroup_attached_num: The number of times each target group can be associated with ALB forwarding rules. Fill in the target group ID in ResourceIds.
-alb_quota_targetgroup_targets_num: Number of real servers supported by each target group. It is applicable to IP and port type backends. For ResourceIds, fill in the target group ID.
-alb_quota_targetgroup_targets_num_scf: Number of SCF function backends supported by each target group. For ResourceIds, fill in the target group ID.
-alb_quota_max_request_timeout: Maximum timeout time configurable for a connection request when a listener is created.
-alb_quota_max_idle_timeout: Maximum idle timeout that can be configured for a connection when a listener is created.
-alb_quota_listener_certificates_num: Number of certificates that can be added to each listener. For ResourceIds, fill in the listener ID.
-alb_quota_rule_targetgroups_num: Number of target groups that can be bound to a forwarding rule.
-alb_quota_rule_conditions_num: Number of match conditions that can be added to a forwarding rule.
-alb_quota_rule_wildcards_num: Number of match entries containing wildcards that can be added to a single forwarding rule.
-alb_quota_rule_actions_num: Number of action entries that can be added to a single forwarding rule.
-alb_quota_cipher_template_listeners_num: Number of listeners that can be associated with each encryption suite template.
-alb_quota_healthcheck_templates_num: Number of health check templates that can be created per region.
-alb_quota_securitygroup_templates_num: Number of security groups that can be bound to one ALB instance.
-alb_quota_securitygroup_rules_per_sg_num: Number of rule entries supported by one security group in one ALB instance.
-alb_quota_security_policies_num: Number of custom security policies creatable per region.
     */
    public $QuotaTypes;

    /**
     * @var array Field display list used to control whether to additionally return usage information. Supports used and available: used means to return the currently used amount, and available means to return the current remaining available amount. QuotaType and Limit are always returned. ResourceId will be returned when ResourceIds are input in the request.
     */
    public $DisplayFields;

    /**
     * @var array Resource ID list. Used for querying the quota and amount at the specific resource dimension. If not specified, the default quota configuration at the account or region level is queried. The type of resource ID is determined by QuotaTypes. For example, for ALB instance-level quotas, fill in the ALB instance ID; for listener-level quotas, fill in the listener ID; for target group-level quotas, fill in the target group ID.
     */
    public $ResourceIds;

    /**
     * @param array $QuotaTypes List of quota types. Supports inputting multiple quota types at the same time. When querying resource-level quotas, can be used in conjunction with ResourceIds to input the corresponding resource IDs. To return the used amount and available amount, input used and available in DisplayFields.

Enumeration description:
- alb_quota_loadbalancers_num: Number of ALB instances creatable per region.
- alb_quota_targetgroups_num: Number of ALB target groups creatable per region.
-alb_quota_loadbalancer_listeners_num: Number of listeners creatable for each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_rules_num: Number of forwarding rules that can be added to each ALB instance, excluding the default rule. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_certificates_num: Number of additional certificates that can be added to each ALB instance, excluding the default certificate. For ResourceIds, fill in the ALB instance ID.
-alb_quota_loadbalancer_targetgroup_num: The number of target groups that can be bound to each ALB instance. Fill in the ALB instance ID in ResourceIds.
-alb_quota_loadbalancer_servers_num: Number of real servers that can be added to each ALB instance. For ResourceIds, fill in the ALB instance ID.
-alb_quota_server_added_num: Number of times one real server IP can be added to an ALB backend target group.
-alb_quota_targetgroup_attached_num: The number of times each target group can be associated with ALB forwarding rules. Fill in the target group ID in ResourceIds.
-alb_quota_targetgroup_targets_num: Number of real servers supported by each target group. It is applicable to IP and port type backends. For ResourceIds, fill in the target group ID.
-alb_quota_targetgroup_targets_num_scf: Number of SCF function backends supported by each target group. For ResourceIds, fill in the target group ID.
-alb_quota_max_request_timeout: Maximum timeout time configurable for a connection request when a listener is created.
-alb_quota_max_idle_timeout: Maximum idle timeout that can be configured for a connection when a listener is created.
-alb_quota_listener_certificates_num: Number of certificates that can be added to each listener. For ResourceIds, fill in the listener ID.
-alb_quota_rule_targetgroups_num: Number of target groups that can be bound to a forwarding rule.
-alb_quota_rule_conditions_num: Number of match conditions that can be added to a forwarding rule.
-alb_quota_rule_wildcards_num: Number of match entries containing wildcards that can be added to a single forwarding rule.
-alb_quota_rule_actions_num: Number of action entries that can be added to a single forwarding rule.
-alb_quota_cipher_template_listeners_num: Number of listeners that can be associated with each encryption suite template.
-alb_quota_healthcheck_templates_num: Number of health check templates that can be created per region.
-alb_quota_securitygroup_templates_num: Number of security groups that can be bound to one ALB instance.
-alb_quota_securitygroup_rules_per_sg_num: Number of rule entries supported by one security group in one ALB instance.
-alb_quota_security_policies_num: Number of custom security policies creatable per region.
     * @param array $DisplayFields Field display list used to control whether to additionally return usage information. Supports used and available: used means to return the currently used amount, and available means to return the current remaining available amount. QuotaType and Limit are always returned. ResourceId will be returned when ResourceIds are input in the request.
     * @param array $ResourceIds Resource ID list. Used for querying the quota and amount at the specific resource dimension. If not specified, the default quota configuration at the account or region level is queried. The type of resource ID is determined by QuotaTypes. For example, for ALB instance-level quotas, fill in the ALB instance ID; for listener-level quotas, fill in the listener ID; for target group-level quotas, fill in the target group ID.
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
        if (array_key_exists("QuotaTypes",$param) and $param["QuotaTypes"] !== null) {
            $this->QuotaTypes = $param["QuotaTypes"];
        }

        if (array_key_exists("DisplayFields",$param) and $param["DisplayFields"] !== null) {
            $this->DisplayFields = $param["DisplayFields"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
